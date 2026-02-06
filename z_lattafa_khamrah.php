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
                        <img src="img/khamrah.png" class="d-block w-100 img-adv" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/khamrah_adv.jpg" class="d-block w-100 img-adv" alt="...">
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
            <h1 class="mb-4">Lattafa - Khamrah</h1>
            <div class="mb-3">
                <p class="fs-4">Uniszex</p>
                <p class="fs-4">Eau de Parfum</p>
            </div>
            <form action="includes/product_page.inc.php" method="POST">

                <input type="hidden" name="product-name" value="lattafa_khamrah">

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
                <p>A datolya a fűszeres fahéjjal, és szerecsendióval alkot egyedi kombinációt. Ezután az édes pralinét
                    élvezheti ki, a tubarózsával együtt, amelyek romantikus hangulatot biztosítanak. Legtovább bőrén a
                    pörkölt tonka, benzoin, mirha, édes vanília, és melengető borostyán maradnak meg.</p>
            </div>
        </div>

        <hr class="vonal">

        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Teljes összetevőlista</h4>
                <p>ALCOHOL DENAT., AQUA/WATER/EAU, PARFUM/FRAGRANCE, METHYL CYCLODEXTRIN, ETHYLHEXYL SALICYLATE,
                    LIMONENE, BUTYL METHOXYDIBENZOYLMETHANE, LINALOOL, CITRAL, ALCOHOL,
                    TRIS(TETRAMETHYLHYDROXYPIPERIDINOL) CITRATE, FARNESOL, TETRASODIUM GLUTAMATE DIACETATE, EXT. D&C
                    VIOLET NO. 2 (CI 60730), FD&C BLUE NO. 1 (CI 42090), FD&C RED NO. 4 (CI 14700). A termék
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
    changeTitle("Lattafa - Khamrah");
</script>
</body>

</html>