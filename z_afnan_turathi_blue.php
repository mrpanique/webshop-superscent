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
                        <img src="img/afnan_turathi_blue.png" class="d-block w-100 img-adv" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/afnan_turathi_blue_adv.jpg" class="d-block w-100 img-adv" alt="...">
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
            <h1 class="mb-4">Afnan - Turathi Blue</h1>
            <div class="mb-3">
                <p class="fs-4">Férfias</p>
                <p class="fs-4">Eau de Parfum</p>
            </div>
            <form action="includes/product_page.inc.php" method="POST">

                <input type="hidden" name="product-name" value="afnan_turathi_blue">

                <div class="mb-3">
                    <label for="meret" class="form-label">Méret</label>
                    <select class="form-select mb-3" id="meret" name="meret">
                        <option value="3">3 ml - 1195 Ft</option>
                        <option value="10">10 ml - 2895 Ft</option>
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
                <p>Az egzotikus mandarin, és a különleges bergamott keveredik a titokzatos, fás akkordokkal. A borostyán
                    melengető tónusai sem hiányozhatnak, az érzéki pézsma pedi csábító hangulatot kölcsönöz az illatnak,
                    és a pacsulival keveredik. Legtovább bőrén a friss, fűszeres illatok maradnak meg.</p>
            </div>
        </div>

        <hr class="vonal">

        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Teljes összetevőlista</h4>
                <p>ALCOHOL DENAT., AQUA/WATER/EAU, PARFUM/FRAGRANCE, METHYL CYCLODEXTRIN, ETHYLHEXYL SALICYLATE,
                    LIMONENE, BUTYL METHOXYDIBENZOYLMETHANE, LINALOOL, CITRAL, ALCOHOL,
                    TRIS(TETRAMETHYLHYDROXYPIPERIDINOL) CITRATE, FARNESOL, TETRASODIUM GLUTAMATE DIACETATE, EXT. A
                    termék
                    összetevőiért a gyártó felelős. A lehetséges változások miatt javasoljuk az összetevők ellenőrzését
                    a termék csomagolásán.</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Afnan márkáról</h4>
                <p>Az Afnan egy fiatal parfümmárka az Emirátusokból, mely a Nyugat és a Közel-Kelet közötti szakadékot
                    szeretné áthidalni kreatív illataikkal és koncepciók összeolvasztásával. A márka első illata
                    2012-ben debütált, jelenleg pedig közel félszáz illat található a kínálatukban.</p>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>

<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Afnan - Turathi Blue");
</script>
</body>

</html>