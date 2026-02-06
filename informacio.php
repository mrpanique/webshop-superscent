<?php
include_once 'navbar.php';
require_once 'includes/config_session.inc.php';
?>

<h1 class="text-center mb-3">Információk a webáruházról</h1>

<div class="container">
    <hr class="vonal"> 
    <div class="row">
        <div class="col">
            <div class="list-group">
                <a href="#ele" class="list-group-item list-group-item-action text-center">ELÉRHETŐSÉG <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
                <a href="#sza" class="list-group-item list-group-item-action text-center">SZÁLLÍTÁS ÉS FIZETÉS <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
                <a href="#ada" class="list-group-item list-group-item-action text-center">ADATKEZELÉSI TÁJÉKOZTATÓ <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
                <a href="#aszf" class="list-group-item list-group-item-action text-center">ÁLTALÁNOS SZERZŐDÉSI FELTÉTELEK
                    <i class="bi bi-arrow-right-circle-fill"></i></a>
                <a href="#rek" class="list-group-item list-group-item-action text-center" id="ele">REKLAMÁCIÓ <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <section>
        <h2 class="mt-5">Elérhetőségek</h2>
        <div class="row mt-3">
            <div class="col">
                <img src="img/email.png" alt="Mail Image" class="img-fluid" style="max-width: 80px;">
                <br>
                <a href="mailto:superscent@support.com" class="simple-link">superscent@support.com</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <img src="img/phone.png" alt="Phone Image" class="img-fluid" style="max-width: 80px;">
                <br>
                <a href="tel:+36012345678" class="simple-link">+36 01 234 5678</a>
            </div>
        </div>
    </section>
</div>

<div class="container text-center mt-3">
    <div class="row justify-content-center">
        <h2 class="mt-5">További adataink <i class="bi bi-clipboard2-check fs-3"></i> </h2>
        <table class="table profil-table mt-3">
            <tbody>
                <tr>
                    <th scope="row">A cég neve:</th>
                    <td>
                        Superscent Hungary Kft.
                    </td>
                </tr>
                <tr>
                    <th scope="row">A cég címe:</th>
                    <td>
                        Dubai utca 1. <br> 5600 Békéscsaba, HU
                    </td>
                </tr>
                <tr>
                    <th scope="row">A cég adószáma:</th>
                    <td>
                        xxxxxxxx-y-zz
                    </td>
                </tr>
                <tr>
                    <th scope="row" id="sza">A cég IBAN száma:</th>
                    <td>
                        HU00 1111 2222 3333 4444 5555 6666
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container text-center">
    <section class="mt-5">
        <h2>Szállítás <i class="bi bi-truck fs-2"></i></h2>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled">
                    <li class="lead">A megrendelés szállítása díjköteles, a házhozszállítást a GLS futárszolgálat végzi.
                    </li>
                    <li class="lead">Szállítási költség - bruttó 1450 Ft.</li>
                    <li class="lead">A kiszállítás 1-3 munkanapon belül történik.</li>
                    <li class="lead">A futárszolgálat hétfőtől-péntekig, 08:00-17:00 óra között kézbesíti a
                        megrendeléseket.</li>
                    <li class="lead">A csomag aktuális helyzetéről a futárszolgálat értesítést küld a vásárló részére
                        e-mailben a vásárláskor megadott email címre.</li>
                    <li class="lead">A kiszállítás reggelén a futárnak kapcsolatba kellene lépnie önnel,hogy
                        megbeszéljék a kiszállítás helyét és idejét, esetleg, hogy megbeszéljék a kiszállítási cím és
                        időpont változását.</li>
                    <li class="lead">Ha a Vásárló az átvétel során sérülést tapasztal a terméken vagy a csomagoláson,
                        akkor a futártól ne vegye át a terméket, kérje jegyzőkönyv felvételét és küldje vissza a
                        futárral.</li>
                    <li class="lead">A csomagja követését a következő weboldalon tudja megtenni, ahol elég megadnia a
                        csomagszámot:</li>
                    <li class="lead"><a href="https://gls-group.eu/HU/hu/home" class="simple-link fs-5"
                            target="_blank">https://gls-group.eu/HU/hu/home</a></li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5">Fizetés <i class="bi bi-credit-card-fill fs-2"></i></h2>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled">
                    <li class="lead">Online bankkártyás fizetésre van lehetőség.</li>
                    <li class="lead">A megrendelés végösszegének azonnali kifizetése az OTP SimplePay rendszerén keresztül történik.</li>
                    <li class="lead">Az ön kártyájának adatait a bank kezeli, mi azokat nem látjuk.</li>
                    <li class="lead" id="ada">A tranzakció eredményéről a fizetést követően pénzügyi szolgáltató oldala tájékoztatja.</li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5">Adatkezelés <i class="bi bi-lock-fill fs-2"></i></h2>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled">
                    <li class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies nibh a sapien blandit, in rhoncus lectus eleifend. Vestibulum a elementum nisi. Nam facilisis diam nec aliquam eleifend.</li>
                    <li class="lead">Ut gravida lacus sit amet est dignissim euismod. Sed mollis ipsum sed consequat ultrices. Curabitur tempor arcu sed elit tincidunt, id dictum augue suscipit.</li>
                    <li class="lead">Fusce neque ligula, laoreet vulputate sollicitudin eget, sagittis sit amet nibh. Nulla facilisi.</li>
                    <li class="lead" id="aszf">Quisque iaculis, nunc nec vehicula sagittis, dui turpis porta ligula, a aliquam quam odio sed leo.</li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5">Általános Szerződési Feltételek <span class="fs-2">§</span></h2>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled">
                <li class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies nibh a sapien blandit, in rhoncus lectus eleifend. Vestibulum a elementum nisi. Nam facilisis diam nec aliquam eleifend.</li>
                    <li class="lead">Ut gravida lacus sit amet est dignissim euismod. Sed mollis ipsum sed consequat ultrices. Curabitur tempor arcu sed elit tincidunt, id dictum augue suscipit.</li>
                    <li class="lead">Fusce neque ligula, laoreet vulputate sollicitudin eget, sagittis sit amet nibh. Nulla facilisi.</li>
                    <li class="lead" id="rek">Quisque iaculis, nunc nec vehicula sagittis, dui turpis porta ligula, a aliquam quam odio sed leo.</li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5">Reklamáció <i class="bi bi-exclamation-circle-fill fs-2"></i></h2>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled">
                    <li class="lead">A reklamációs formanyomtatvány <a href="reklamacio.pdf" class="simple-link" target="_blank">ITT ÉRHETŐ EL</a></li>
                    <li class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies nibh a sapien blandit, in rhoncus lectus eleifend. Vestibulum a elementum nisi. Nam facilisis diam nec aliquam eleifend.</li>
                    <li class="lead">Ut gravida lacus sit amet est dignissim euismod. Sed mollis ipsum sed consequat ultrices. Curabitur tempor arcu sed elit tincidunt, id dictum augue suscipit.</li>
                    <li class="lead">Fusce neque ligula, laoreet vulputate sollicitudin eget, sagittis sit amet nibh. Nulla facilisi.</li>
                    <li class="lead">Quisque iaculis, nunc nec vehicula sagittis, dui turpis porta ligula, a aliquam quam odio sed leo.</li>
                </ul>
            </div>
        </div>

    </section>
</div>




<?php require_once 'footer.php'; ?>
<script src="includes/cookie_consent.js"></script>
<script>
    changeTitle("Információ");
</script>
</body>

</html>