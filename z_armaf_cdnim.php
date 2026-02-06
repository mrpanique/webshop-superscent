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
                        <img src="img/cdnim.png" class="d-block w-100 img-adv" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/cdnim_adv.jpg" class="d-block w-100 img-adv" alt="...">
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
            <h1 class="mb-4">Armaf - Club de Nuit Intense Man</h1>
            <div class="mb-3">
                <p class="fs-4">Férfias</p>
                <p class="fs-4">Eau de Parfum</p>
            </div>
            <form action="includes/product_page.inc.php" method="POST">

                <input type="hidden" name="product-name" value="armaf_cdnim">

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
                <p>Az ananász, a bergamott, a citrom, a fekete ribizli, és az nyírfa barátságos hangulatot keltenek, és
                    azonnal magukhoz vonzzák viselőjét. A rózsa, a jázmin, és a zöldalma romantikus megjelenést
                    kölcsönöznek, végül a vanília, a pézsma, az ámbra, és a pacsuli alapjegyei meleg, és telt illatokat
                    biztosítanak. Csodálatos kompozíció, illata hívogató, izgalmas. Semmihez sem hasonlítható élményt
                    nyújt, lehetővé teszi hogy feltárja a rég elfelejtett emlékeket, és újakat alkosson.</p>
            </div>
        </div>

        <hr class="vonal">

        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Teljes összetevőlista</h4>
                <p>ALKOHOL DENAT., AQUA/VÍZ/EAU, PARFÜM/ILLAT, METIL-CIKLODEXTRIN, ETIL-HEXIL-SZALICILÁT, LIMONÉN,
                    BUTIL-METOXI-DIBENZOILMETÁN, LINALOOL, CITRÁL, ALKOHOL, TRISZ(TETRAMETIL-HIDROXIPIPERIDINOL) CITRÁT,
                    FARNESOL, TETRANÁTRIUM-GLUTAMÁT-DIAKETÁT, EXT. D&C LILA SZ. 2 (CI 60730), FD&C KÉK SZ. 1 (CI 42090),
                    FD&C PIROS SZ. 4 (CI 14700).</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <h4 class="mb-3">Armaf márkáról</h4>
                <p>Az Armaf egy parfümmárka a Sterling Parfums Industries LLC vállalatcsoportjában. A cég székhelye az
                    Egyesült Arab Emírségek (UAE). A vállalatcsoportot 1998-ban alapította a Fakhruddin család.
                    Már jóval azelőtt, hogy ez megtörtént volna, a családnak az volt a víziója, hogy olyan céget
                    hozzanak létre, amely minden érintett számára sikert hoz. Az elv, miszerint minden alkalmazottat és
                    beszállítót tisztelettel kell kezelni, valamint ügyfeleket kifogástalan szolgáltatással kell
                    ellátni, a vállalat alapját képezte. A cég filozófiája a hűség és az őszinteség irányelvei mentén
                    alakult ki, mély meggyőződésből, hogy egy vállalkozás csak akkor lehet sikeres, ha mindenki
                    összefog.
                    A Sterling Parfums regionális szakértő a szerződéses gyártásban és az UAE egyik vezető márkás
                    szépségápolási és testápolási termékeket gyártó vállalata. Gyártókapacitásaik között az egyik
                    legnagyobb a Közel-Keleten. A portfólió parfümöket, dezodorokat, spray-ket, légfrissítőket, valamint
                    haj-, test- és bőrápoló termékeket tartalmaz. Több mint 95 országba exportál és értékesít. Minden
                    egyes termék magas minősége egy olyan minőségirányítási rendszerrel van garantálva, amely nemzetközi
                    szabványoknak felel meg. A Sterling Parfums LLC emellett kozmetikai és testápolási termékek mellett
                    széles kozmetikával kapcsolatos műanyagcikkeket is gyárt.
                    Az Armaf számos különböző illatot kínál. A "Club de Nuit" sorozat különösen ismertté vált.</p>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>

<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Armaf - CDNIM");
</script>
</body>

</html>