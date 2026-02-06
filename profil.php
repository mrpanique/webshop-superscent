<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/profil_view.inc.php';

if(!isset($_SESSION["user_id"])){
  header("Location: ./login.php");
  die();
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <h1>Saját profil</h1>
    </div>
  </div>
  <hr class="vonal">
</div>

<div class="container mt-5">
  <div class="row justify-content-center">
    <table class="table profil-table">
      <tbody>
        <tr>
          <th scope="row">Az email címe:</th>
          <td><?php email_kiir();?></td>
        </tr>
        <tr>
          <th scope="row">A telefonszáma:</th>
          <td><?php telefon_kiir();?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 text-center">
      <form action="includes/logout.inc.php" method="post">
        <button type="submit" class="btn btn-danger btn-lg">Kijelentkezés</button>
      </form>
      <?php adminButton(); ?>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>
<script>
    changeTitle("Profil");
</script>

</body>
</html>
