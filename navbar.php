<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superscent</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://kit.fontawesome.com/16d9a019a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">superscent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">termékek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacio.php">információ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="question.php">kérdés</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link bi bi-person-fill" href="profil.php"> Profil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link bi bi-basket2-fill" href="cart.php"> Kosár</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="cookie-consent" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <h5 class="modal-title">Az alapvető funkciók működése érdekében az oldal <b>cookie</b>-kat használ.
                    </h5>
                    <button type="button" class="btn btn-lg btn-login mt-3" id="accept-cookies">Rendben</button>
                </div>
            </div>
        </div>
    </div>