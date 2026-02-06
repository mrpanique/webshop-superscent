<?php
include_once 'navbar.php';
require_once 'includes/classes/question_class.php';
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

?>

<h1 class="text-center mb-3">Beérkező kérdések</h1>

<div class="container">
    <hr class="vonal">
    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Szöveg</th>
                        <th scope="col">Dátum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php showQuestions($pdo); ?>
                </tbody>
            </table>
        </div>
        <div class="d-sm-none">
            <h4> <i class="bi bi-arrow-left fs-3"></i> csúsztassa <i class="bi bi-arrow-right fs-3"></i> </h2>
        </div>
    </div>
</div>


</body>

</html>
