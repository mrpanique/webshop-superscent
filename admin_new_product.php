<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] !== 1) {
    header("Location: index.php?manipulated");
    die();
}
?>

<h1 class="text-center">Új termék felvétele</h1>
<div class="container text-center">
    <hr class="vonal mb-4">
    <p>1. Adatbázisban `parfum_nev` és `termek_peldany`-ba felvenni</p>
    <p>2. products.php - kártya hozzáadás</p>
    <p>3. product page elkészítése</p>
</div>

