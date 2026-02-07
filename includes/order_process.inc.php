<?php

require_once 'config_session.inc.php';
require_once 'order_contr.inc.php';
require_once 'order_model.inc.php';
require_once 'product_information_model.inc.php';
try {
    require_once 'dbh.inc.php';
} catch (Exception $e) {
    header("Location: ../index.php?manipulated");
    die();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php?manipulated");
    die();
}

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login.php?timed_out");
    die();
}

$bill_vez = $_POST["bill-vez"];
$bill_ker = $_POST["bill-ker"];
$bill_varos = $_POST["bill-varos"];
$bill_irsz = $_POST["bill-irsz"];
$bill_utcahaz = $_POST["bill-utcahaz"];

$ship_vez = $_POST["ship-vez"];
$ship_ker = $_POST["ship-ker"];
$ship_varos = $_POST["ship-varos"];
$ship_irsz = $_POST["ship-irsz"];
$ship_utcahaz = $_POST["ship-utcahaz"];
$ship_email = $_POST["ship-email"];
$ship_tel = $_POST["ship-tel"];

$errors = [];

if (isset($_POST["ship-same"])) {
    // megegyezik -> csak a bill kell

    // input ellenorzes:
    if (is_bill_empty($bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz)) {
        $errors["empty_input"] = "Töltsön ki minden mezőt!";
    } else {
        if (is_irsz_invalid($bill_irsz)) {
            $errors["invalid_irsz"] = "Érvénytelen irányítószám";
        }
    }
    sendErrors($errors);

    // megnezi hogy a szamla. cim letezik-e mar, ha igen visszakapja az id-jet, ha nem felveszi, es visszakapja az id-jet 
    if (getAddressId($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz)) {
        $bill_id = getAddressId($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz);
    } else {
        $bill_id = setAddress($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz);
    }

    $order_id = generateOrderId($pdo);
    $email = $_SESSION['user_email'];
    $telefon = $_SESSION['user_telefon'];
    $kontakt = "$email|$telefon";

    setOrder($pdo, $order_id, $_SESSION['user_id'], $kontakt, $bill_id, $bill_id, $_SESSION['final']);

} else {

    if (is_ship_empty($ship_vez, $ship_ker, $ship_varos, $ship_irsz, $ship_utcahaz, $ship_email, $ship_tel, ) or is_bill_empty($bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz)) {
        $errors["empty_input"] = "Töltsön ki minden mezőt!";
    } else {
        if (is_email_invalid($ship_email)) {
            $errors["invalid_email"] = "Érvénytelen email.";
        }
        if (is_telefon_invalid($ship_tel)) {
            $errors["invalid_tel"] = "Érvénytelen telefonszám.";
        }
        if (is_irsz_invalid($bill_irsz)) {
            $errors["invalid_irsz"] = "Érvénytelen irányítószám";
        }
        if (is_irsz_invalid($ship_irsz)) {
            $errors["invalid_irsz"] = "Érvénytelen irányítószám.";
        }
    }
    sendErrors($errors);

    if (getAddressId($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz)) {
        $bill_id = getAddressId($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz);
    } else {
        $bill_id = setAddress($pdo, $bill_vez, $bill_ker, $bill_varos, $bill_irsz, $bill_utcahaz);
    }

    if (getAddressId($pdo, $ship_vez, $ship_ker, $ship_varos, $ship_irsz, $ship_utcahaz)) {
        $ship_id = getAddressId($pdo, $ship_vez, $ship_ker, $ship_varos, $ship_irsz, $ship_utcahaz);
    } else {
        $ship_id = setAddress($pdo, $ship_vez, $ship_ker, $ship_varos, $ship_irsz, $ship_utcahaz);
    }

    $order_id = generateOrderId($pdo);
    $kontakt = "$ship_email|$ship_tel";

    setOrder($pdo, $order_id, $_SESSION['user_id'], $kontakt, $bill_id, $ship_id, $_SESSION['final']);
}

foreach ($_SESSION['sku_qty'] as $sku => $qty) {

    //total kiszamolasa
    $sku_details = get_product_from_sku($pdo, $sku);
    $total = $sku_details['ar'] * $qty;

    setOrderedProduct($pdo, $order_id, $sku, $qty, $total);
}

//kosar kiuritese
$_SESSION['cart'] = [];
unset($_SESSION['sku_qty']);

header("Location: ../pay.php?order_id=$order_id");
die();

function sendErrors($errors)
{
    if ($errors) {
        $_SESSION['errors_order'] = $errors;
        header("Location: ../order.php");
        die();
    } 
}

function generateOrderId($pdo)
{
    do{
        $characters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
        $id = '';
        for ($i = 0; $i < 7; $i++) {
            $id .= $characters[rand(0, strlen($characters) - 1)];
        }
    }
    while(doesOrderIdExist($pdo, $id));
    return $id;
}