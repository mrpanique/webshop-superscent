<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
?>

<div class="container">
    <div class="row mt-3">
        <!-- Filters section -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-funnel fs-5"></i> SZŰRŐK</h5>
                    <form>
                        <div class="mb-3">
                            <label for="filter-nem">Nem:</label>
                            <select class="form-select" id="filter-nem">
                                <option selected>Mind</option>
                                <option value="Férfias">Férfias</option>
                                <option value="Uniszex">Uniszex</option>
                                <option value="Nőies">Nőies</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="filter-marka">Márka:</label>
                            <select class="form-select" id="filter-marka">
                                <option selected>Mind</option>
                                <option value="Lattafa">Lattafa</option>
                                <option value="Armaf">Armaf</option>
                                <option value="Afnan">Afnan</option>
                                <option value="Rasasi">Rasasi</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-search fs-5"></i> KERESŐ</h5>
                    <form id="search-form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="key" placeholder="név vagy márka">
                        </div>
                        <button type="button" class="btn btn-irany" id="kereses" onclick="search()">Keresés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-center mt-3" id="no-result" style="display:none">Nincs találat.</h4>
    <!-- PRODUCT-ROW SOR -->
    <div class="row product-row mt-3">
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/khamrah.png" class="card-img-top" alt="LATTAFA KHAMRAH">
                <div class="card-body">
                    <h5 class="card-title text-center">Lattafa - Khamrah</h5>
                    <p class="card-text mt-3 text-center">Uniszex <br> Eau de Parfum <br> 1495 Ft-tól</p>
                    <p class="card-nem filter-info">Uniszex</p>
                    <p class="card-marka filter-info">Lattafa</p>
                    <a href="z_lattafa_khamrah.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/cdnim.png" class="card-img-top" alt="ARMAF CDNIM">
                <div class="card-body">
                    <h5 class="card-title text-center">Armaf - Club de Nuit Intense Man</h5>
                    <p class="card-text mt-3 text-center">Férfias <br> Eau de Parfum <br> 1195 Ft-tól</p>
                    <p class="card-nem filter-info">Férfias</p>
                    <p class="card-marka filter-info">Armaf</p>
                    <a href="z_armaf_cdnim.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/asad.png" class="card-img-top" alt="LATTAFA ASAD">
                <div class="card-body">
                    <h5 class="card-title text-center">Lattafa - Asad</h5>
                    <p class="card-text mt-3 text-center">Férfias <br> Eau de Parfum <br> 895 Ft-tól</p>
                    <p class="card-nem filter-info">Férfias</p>
                    <p class="card-marka filter-info">Lattafa</p>
                    <a href="z_lattafa_asad.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/hawas.png" class="card-img-top" alt="RASASI HAWAS">
                <div class="card-body">
                    <h5 class="card-title text-center">Rasasi - Hawas</h5>
                    <p class="card-text mt-3 text-center">Férfias <br> Eau de Parfum <br> 1495 Ft-tól</p>
                    <p class="card-nem filter-info">Férfias</p>
                    <p class="card-marka filter-info">Rasasi</p>
                    <a href="z_rasasi_hawas.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/afnan_turathi_blue.png" class="card-img-top" alt="AFNAN TURATHI BLUE">
                <div class="card-body">
                    <h5 class="card-title text-center">Afnan - Turathi Blue</h5>
                    <p class="card-text mt-3 text-center">Férfias <br> Eau de Parfum <br> 1195 Ft-tól</p>
                    <p class="card-nem filter-info">Férfias</p>
                    <p class="card-marka filter-info">Afnan</p>
                    <a href="z_afnan_turathi_blue.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
        <div class="termek col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card mb-4">
                <img src="img/lattafa_nebras.png" class="card-img-top" alt="LATTAFA NEBRAS">
                <div class="card-body">
                    <h5 class="card-title text-center">Lattafa - Nebras</h5>
                    <p class="card-text mt-3 text-center">Nőies <br> Eau de Parfum <br> 1495 Ft-tól</p>
                    <p class="card-nem filter-info">Nőies</p>
                    <p class="card-marka filter-info">Lattafa</p>
                    <a href="z_lattafa_nebras.php" class="btn btn-login">RÉSZLETEK</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>

<script src="includes/products.js"></script>
<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Termékek");
</script>
</body>

</html>