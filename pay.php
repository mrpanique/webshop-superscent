<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/pay_view.inc.php';

if(!isset($_GET['order_id'])){
    header('Location: index.php?manipulated');
    die();
}
?>

<div class="text-center mt-5">
    <h3 class="form-success">Köszönjük, hogy minket választott!</h3>
    <img src="img/logo.png" alt="superscent" class="img-fluid">

    <h3 class="mt-5">A rendelés azonosítója:</h3>  
    <h2 class="order-id"><?php showOrderId(); ?></h2>

    <a href="index.php" class="btn btn-lg btn-irany mt-5"> Vissza a főoldalra</a>
</div>

<?php require_once 'footer.php'; ?>
<script>
    changeTitle("Sikeres rendelés");
</script>

</body>

</html>