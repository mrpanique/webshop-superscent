<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/registration_view.inc.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login-container">
            <h2 class="text-center mb-4">Regisztráció</h2>
            <?php check_registration_errors(); ?>
            <form action="includes/registration.inc.php" method="POST">
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="...">
                </div>
                <div class="form-group">
                    <label for="password2">Telefonszám (mobil)</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="...">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="...">
                </div>
                <div class="form-group">
                    <label for="password2">Jelszó mégegyszer</label>
                    <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="...">
                </div>
                <button type="submit" class="btn btn-login btn-block mt-4">Regisztráció</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Regisztráció");
</script>
</body>

</html>