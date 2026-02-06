<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
?>

<div class="container text-center mt-3">
    <img src="img/404.png" class="img-fluid img-404">
    <h1 class="mt-5 mb-3">A keresett oldal nem található.</h1>
    <h4>Valószínűleg rosszul írta be a címet. Kérjük, próbálja újra!</h3>
</div>

<?php require_once 'footer.php'; ?>
<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Oldal nem található");
</script>
</body>

</html>