<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/order_view.inc.php';
require_once 'includes/product_information_model.inc.php';

try{
    require_once 'includes/dbh.inc.php';
}
catch(Exception $e){
    header("Location: index.php?connection");
    die();
}

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php?kosar");
    die();
}

$final = 1450;

// ha a submitolas utan dob ide vissza akkor empty lesz a $_POST
if (!empty($_POST)) 
{
    // sku_qty session valtozo kiuritese
    $_SESSION['sku_qty'] = array(); 

    foreach ($_POST as $mennyiseg_sku => $qty) {

        $sku = substr($mennyiseg_sku, 10);

        // a megrendelt termekek(es annak mennyisegei) hozzaadasa
        $_SESSION['sku_qty'][$sku] = $qty;

        $total = get_product_from_sku($pdo, $sku)["ar"] * $qty;
        $final += $total;
        $_SESSION['final'] = $final;
    }
}

if(!isset($_SESSION['final'])) {
    header('Location: cart.php?empty');
    die();
}

?>

<script src="includes/order.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <p>A házhozszállítást a GLS futárszolgálat végzi.</p>
                <img src="img/gls.png" alt="GLS" class="img-fluid" style="max-width: 250px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-4">
                <p>A fizetés online, bankkártyával lehetséges.</p>
                <img src="img/visa.png" alt="VISA MASTERCARD" class="img-fluid" style="max-width: 300px">
            </div>
        </div>
    </div>

    <hr class="vonal">

</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 order-container">
            <form action="includes/order_process.inc.php" method="post">
                <!-- Számlázási cím -->
                <div class="mb-4">
                    <?php showErrors(); ?>
                    <h3>Számlázási cím</h3>
                    <div class="form-group">
                        <label for="billing_lastname">Vezetéknév</label>
                        <input type="text" class="form-control" id="billing_lastname" name="bill-vez" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="billing_firstname">Keresztnév</label>
                        <input type="text" class="form-control" id="billing_firstname" name="bill-ker"
                            placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="billing_city">Város</label>
                        <input type="text" class="form-control" id="billing_city" name="bill-varos" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="billing_zip">Irányítószám</label>
                        <input type="number" class="form-control" id="billing_zip" name="bill-irsz" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="billing_address">Utca és házszám</label>
                        <input type="text" class="form-control" id="billing_address" name="bill-utcahaz"
                            placeholder="...">
                    </div>
                </div>
                <!-- Szállítási cím -->
                <div class="mb-4">
                    <h3>Szállítási cím</h3>
                    <div class="form-check mb-3">
                        <input class="form-check-input check-dark" type="checkbox" id="same_address"
                            onchange="toggleShippingAddress()" name="ship-same">
                        <label class="form-check-label" for="same_address">Megegyezik a számlázási címmel</label>
                    </div>
                    <div id="shipping-fields">
                        <div class="form-group">
                            <label for="shipping_lastname">Vezetéknév</label>
                            <input type="text" class="form-control" id="shipping_lastname" name="ship-vez"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_firstname">Keresztnév</label>
                            <input type="text" class="form-control" id="shipping_firstname" name="ship-ker"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_city">Város</label>
                            <input type="text" class="form-control" id="shipping_city" name="ship-varos"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_zip">Irányítószám</label>
                            <input type="number" class="form-control" id="shipping_zip" name="ship-irsz"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_address">Utca és házszám</label>
                            <input type="text" class="form-control" id="shipping_address" name="ship-utcahaz"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_email">Email cím</label>
                            <input type="email" class="form-control" id="shipping_email" name="ship-email"
                                placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="shipping_telefon">Telefonszám</label>
                            <input type="tel" class="form-control" id="shipping_telefon" name="ship-tel"
                                placeholder="...">
                        </div>
                    </div>
                </div>
        </div>
        <hr class="vonal">
        <div class="col-md-8 order-container">
            <h4> Fizetendő:
                <?php showFinal(); ?> Ft
            </h4>
            <p>Amennyiben nem ad meg szállítási címet, akkor a regisztráláskor megadott email címet és telefonszámot fogjuk felhasználni.</p>
            <p class="mt-3">A fizetés az OTP SimplePay rendszerén keresztül történik.</p>
            <p class="mt-3">A fizetéssel elfogadom az adakezelési és szolgáltatási feltételeket.</p>
            <button type="submit" class="btn btn-block btn-lg btn-irany mt-1">Fizetés</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
<script>
    changeTitle("Rendelés");
</script>

</body>

</html>