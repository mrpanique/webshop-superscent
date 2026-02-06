<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/registration_view.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/index_view.inc.php';
?>

<div class="text-center">
  <?php display_success_message(); ?>
</div>
<div class="text-center mb-4 mt-1">
  <img src="img/index_banner.png" class="img-fluid" alt="superscent_banner">
</div>

<div class="text-center mb-4">
  <h3><i class="bi bi-stars fs-3"></i> Arab parfümminta webáruház - Élvezze Dubai illatait! <i
      class="bi bi-stars fs-3"></i></h3>
</div>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/car_khamrah.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/car_asad.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/car_cdnim.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="text-center mt-4">
  <a href="products.php" class="btn btn-lg btn-irany">Irány a termékek <i
      class="fa-solid fa-circle-arrow-right beige"></i></a>
</div>

<hr class="vonal mt-5">

<div class="text-center mt-5">
  <h3><i class="bi bi-stars fs-3"></i> Márkáink <i class="bi bi-stars fs-3"></i></h3>
</div>

<div class="text-center">
  <img src="img/markaink.png" class="img-fluid" alt="superscent_banner">
</div>

<?php
require_once 'footer.php';
?>
<script src="includes/cookie_consent.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
</body>

</html>