<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';

if (!isset ($_SESSION["user_id"]) || $_SESSION["user_id"] !== 1) {
    header("Location: index.php?manipulated");
    die();
}
?>

<h1 class="text-center mb-3">Admin felület</h1>

<div class="container text-center">
    <hr class="vonal">
    <a href="admin_orders.php" class="btn btn-lg btn-irany mb-3">Beérkező rendelések</a> <br>
    <a href="admin_question.php" class="btn btn-lg btn-irany mb-3">Beérkező kérdések</a> <br>
    <a href="admin_new_product.php" class="btn btn-lg btn-irany mb-3">Új termék felvétele</a>
</div>