<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/product_information_model.inc.php';
require_once 'includes/cart_view.inc.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: ./login.php?login");
    die();
} 

try {
    require_once 'includes/dbh.inc.php';
} catch (Exception $e) {
    header('Location: index.php?connection');
    die();
}

?>

<h1 class="text-center mb-3"><i class="bi bi-basket2-fill fs-1"></i> KOSÁR</h1>
<div class="container">
    <hr class="vonal">
</div>
<div class="container mt-3">
    <div class="row">
        <form action="order.php" method="POST">
            <h2>Kosár tartalma</h2>
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Név</th>
                                <th scope="col">Méret</th>
                                <th scope="col">Egységár</th>
                                <th scope="col">Mennyiség</th>
                                <th scope="col">Összeg</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php show_cart_content($pdo) ?>

                        </tbody>
                    </table>
                </div>
                <div class="d-sm-none">
                    <h4> <i class="bi bi-arrow-left fs-3"></i> csúsztassa <i class="bi bi-arrow-right fs-3"></i> </h2>
                </div>
            </div>

            <h2 class="card-title mt-3">Összesítés</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Termékek összege
                    <span id="final">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kiszállítási díj
                    <span>1450 Ft</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Fizetendő összeg
                    <span id="paid">0</span>
                </li>
            </ul>
            <button type="submit" class="btn btn-lg btn-irany mt-3">Tovább a rendeléshez</button>
            <?php showError() ?>
        </form>
    </div>
</div>

<?php require_once 'footer.php'; ?>

<script>
    calculateFinal();
    changeTitle("Kosár");
</script>

</body>

</html>