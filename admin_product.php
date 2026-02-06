<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/admin_model.inc.php';
require_once 'includes/admin_view.inc.php';
require_once 'includes/product_information_model.inc.php';

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

$order_id = $_POST['order-id'];
?>

<h1 class="text-center mb-3">A rendeléshez tartozó termékek</h1>

<div class="container">
    <hr class="vonal">
    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Név</th>
                        <th scope="col">Méret</th>
                        <th scope="col">Mennyiség</th>
                        <th scope="col">Ár</th>
                        <th scope="col">SKU</th>
                    </tr>
                </thead>
                <tbody>
                    <?php showOrderedProducts($pdo, $order_id); ?>
                </tbody>
            </table>
        </div>
        <div class="d-sm-none">
            <h4> <i class="bi bi-arrow-left fs-3"></i> csúsztassa <i class="bi bi-arrow-right fs-3"></i> </h2>
        </div>
    </div>
</div>