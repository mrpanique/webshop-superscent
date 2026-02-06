<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
require_once 'includes/product_page_view.inc.php';

if(isset($_GET['added']))
{
    echo'<script>history.back();</script>';
}
?>

<div class="container">
    <div class="row">
        <!-- BAL OSZLOP -->
        <div class="col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/lattafa_nebras.png" class="d-block w-100 img-adv">
                    </div>
                    <div class="carousel-item">
                        <img src="img/lattafa_nebras_adv.jpg" class="d-block w-100 img-adv">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- JOBB OSZLOP -->
        <div class="col-md-4">
            <h1 class="mb-4">Lattafa - Nebras</h1>
            <div class="mb-3">
                <p class="fs-4">Nőies</p>
                <p class="fs-4">Eau de Parfum</p>
            </div>
            <form action="includes/product_page.inc.php" method="POST">

                <input type="hidden" name="product-name" value="lattafa_nebras">

                <div class="mb-3">
                    <label for="meret" class="form-label">Méret</label>
                    <select class="form-select mb-3" id="meret" name="meret">
                        <option value="3">3 ml - 1495 Ft</option>
                        <option value="10">10 ml - 3795 Ft</option>
                    </select>
                </div>
                <div class="mb-3">
                    <p>A mennyiség a kosárban állítható.</p>
                </div>
                <button type="submit" class="btn btn-login"><i class="bi bi-basket2-fill"></i> KOSÁRBA</button>
                <?php show_alerts(); ?>
                <div class="text-center mt-5">
                    <a href="question.php" class="simple-link fs-5"> Kérdése van a termékről?</a>
                </div>
            </form>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2 class="mb-3">Az illat leírása</h2>
                <p>A kellemes bogyós gyümölcsök, és a vanília egyedi koktélt alkotnak a kakaóval, és a rózsával együtt.
                    Az édes
                    hangulatot a cukor fokozza, amely az érzéki tonkababhoz társul, míg legtovább bőrén a pézsma, és a
                    borostyán kellemesen melengető, csábító jegyei maradnak meg.</p>
            </div>
        </div>

        <hr class="vonal">

        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Teljes összetevőlista</h4>
                <p>ALCOHOL DENAT, FRAGRANCE (PARFUM), WATER (AQUA), BENZYL SALICYLATE, LINALOOL, LIMONENE, GERANIOL,
                    ALPHA-ISOMETHYL IONONE, HEXYL CINNAMAL. A termék
                    összetevőiért a gyártó felelős. A lehetséges változások miatt javasoljuk az összetevők ellenőrzését
                    a termék csomagolásán.</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Lattafa márkáról</h4>
                <p>Az arab kultúra dicsőséges örökségének esszenciáját autentikus keleti illataiban megragadó Lattafa,
                    Dubai vezető parfümmárkája az Egyesült Arab Emírségekből származó kifinomult és magával ragadó
                    illatok világát hozza el a világ több mint 60 országába. Az arab kultúra fényűzését és eleganciáját
                    idéző parfümök koncepcióját 1980-ban Shahid Ahmad sejk Shoaib Iqballal együtt alkotta meg.
                    Márkájuknak a Lattafa nevet adták, amelyet az arab „Latif”, azaz 'kedvesség' és a „Lateefa”, azaz
                    'kellemes' szavak ihlettek. A két társalapítónak az volt az elképzelése, hogy magas minőségű és
                    luxus illatokat hozzanak létre a helyi vásárlók számára a Közel-Keleten. Az induló vállalkozás
                    azonban hamarosan neves céggé vált, amely a világ minden tájára szállít. Kényeztesse magát az arab
                    fényűzéssel, és próbálja ki a Lattafa parfümöket. A márka által kifejlesztett illatok kifejezik a
                    személyiséget, maradandó benyomást keltenek és pozitív érzelmeket váltanak ki.</p>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'footer.php';
?>

<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Lattafa - Nebras");
</script>
</body>

</html>