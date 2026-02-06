<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/admin_model.inc.php';
require_once 'includes/admin_view.inc.php';

try {
    require_once 'includes/dbh.inc.php';
} catch (Exception $e) {
    header("Location: index.php?connection");
    die();
}

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] !== 1) {
    header("Location: index.php?manipulated");
    die();
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php?manipulated");
    die();
}

$bill_id = $_POST['bill_id'];
$ship_id = $_POST['ship_id'];
?>

<h1 class="text-center mb-3">A rendeléshez tartozó címek</h1>
<div class="container">
    <hr class="vonal">
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h3 class="text-center">Számlázási cím</h3>
        <table class="table profil-table">
            <tbody>
                <?php showAddress($pdo, $bill_id); ?>
            </tbody>
        </table>
        <h3 class="text-center">Szállítási cím</h3>
        <table class="table profil-table">
            <tbody>
                <?php showAddress($pdo, $ship_id); ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
