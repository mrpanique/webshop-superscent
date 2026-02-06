<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/question_view.inc.php';

if (!isset ($_SESSION["user_id"])) {
    header("Location: ./login.php?login");
    die();
}

?>

<h1 class="text-center mb-3">Kérdése van?</h1>

<div class="container mt-4">
    <hr class="vonal">
    <div class="row justify-content-center">
        <div class="col-md-8 order-container">
            <?php showError(); ?>
            <p class="mt-3 mb-1">A temékekkel, a webáruházzal, vagy bármivel kapcsolatban, amiben úgy gondolja, segíteni tudunk,</p>
            <h3>Itt felteheti:</h3>
            <form action="includes/question.inc.php" method="post">
                <textarea type="text" class="form-control" name="question-text" placeholder="..." rows="10" maxlength="1500"></textarea><br>
                <button type="submit" class="btn btn-lg btn-irany">Küldés</button>
            </form>
            <p class="mt-4">A válaszunkat arra az email címre fogjuk küldeni, amelyre az ön fiókja regisztrálva van.</p>
        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>
<script>
    changeTitle("Kérdés");
</script>
</body>

</html>