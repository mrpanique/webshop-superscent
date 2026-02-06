<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login-container">
            <h2 class="text-center mb-4">Bejelentkezés</h2>
            <?php check_login_errors(); ?>
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="...">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="...">
                </div>
                <button type="submit" class="btn btn-login btn-block mt-3">Bejelentkezés</button>
            </form>

            <div class="text-center mt-4">
                <p>Nincs még fiókja?
                    <a href="registration.php" class="btn btn-link simple-link">Regisztráció</a>
                </p>
            </div>

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Bejelentkezés");
</script>
</body>

</html>