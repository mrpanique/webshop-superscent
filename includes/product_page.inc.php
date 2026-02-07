<?php

require_once 'config_session.inc.php';
require_once 'product_information_model.inc.php';
try{
    require_once 'dbh.inc.php';
}
catch(Exception $e){
    header("Location: ../index.php?connection");
    die();
}

// -- Kosárba gomb lenyomasa --

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product-name']) && isset($_POST['meret'])) {

    if (!isset($_SESSION["user_id"])) {
        header("Location: ../login.php?login");
        die();
    } 
    else {
    
        $product_name = $_POST['product-name'];
        $size = $_POST['meret'];
    
        // kosarba rakni kivant termek definialasa egy SKU-val
        $new_product_sku = "$product_name-$size";
    
        // ha nem valid az sku akkor atirtak a html-t
        if(!in_array($new_product_sku,get_all_sku($pdo))){
            header("Location: ../index.php?manipulated");   
            die();
            // echo "adott sku: $new_product_sku";   
        }
        
        //ha nincs meg kosarba, belekerul
        if(!in_array($new_product_sku,$_SESSION['cart'])){
            // hozzaadas a cart session valtozohoz (ami egy sima array)
            $_SESSION['cart'][] = $new_product_sku;
            header("Location: ../z_$product_name.php?added");
            die();
        }
        // ha mar kosarban van visszakuld a product_page-re "?duplicate" -el
        else{
            header("Location: ../z_$product_name.php?duplicate"); 
            die();
        }
    }
}
else{
    header("Location: ../index.php?manipulated");
    die();
}

