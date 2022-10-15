<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home · Bob's Fridges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header>
        <div class="collapse bg-info" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Over deze pagina:</h4>
                        <p class="text-muted">Welkom bij Bob's Fridges! Onze homepagina vertelt iets meer
                            over ons bedrijf en wat wij aanbieden.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Navigatie</h4>
                        <ul class="list-unstyled">
                            <li><a href="contact.php" class="text-white">Contact</a></li>
                            <li><a href="products.php" class="text-white">Assortiment</a></li>
                            <li><a href="view.php" class="text-white">Beheersysteem</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-info shadow-sm">
            <div class="container">
                <a href="sign_in.php" class="navbar-brand d-flex align-items-center">
                    <img src="images/profile.png" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                    </img>
                    <strong><?= $_SESSION['adminUser'] ?? $_SESSION['user'] ?? 'Inloggen'?></strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active bg-dark">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Neem contact met ons op!</h1>
                            <p>Vul ons contactformlier in en stuur een bericht.</p>
                            <p><a class="btn btn-lg btn-primary" href="contact.php">Contact opnemen</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item bg-dark">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Bekijk ons assortiment!</h1>
                            <p>Zie alle koelkasten die wij aanbieden.</p>
                            <p><a class="btn btn-lg btn-primary" href="products.php">Assortiment bekijken</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Vorige</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Volgende</span>
            </button>
        </div>

        <div class="container marketing">

            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/bob_vance.png" role="img"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                    <h2 class="fw-normal">Bob Vance</h2>
                    <p>De eigenaar van ons bedrijf. Heeft het bedrijf gestart en is inmiddels multi-miljonair.</p>
                </div>
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/lara_moren.png" role="img"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                    <h2 class="fw-normal">Lara van Moren</h2>
                    <p>Hoofd administratie. Dankzij haar is alles altijd goed gegaan tijdens bestellingen.</p>
                </div>
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/nick_backer.png" role="img"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                    <h2 class="fw-normal">Nick Backer</h2>
                    <p>Hoofd development. Hij zorgt er voor dat u deze site kunt bekijken.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Onze klantvriedelijkheid, <span class="text-muted">U
                            zult versteld staan.</span></h2>
                    <p class="lead">Veel van onze klanten zijn erg tevreden met onze klantendienst. Wij krijgen ook
                        zelden klachten.
                        Zelfs als we ze krijgen zal u rechtvaardig behandeld worden.</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" role="img"
                        src="images/customer-service.png" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Goede staat. <span class="text-muted">Hoe weten
                            wij het zeker?</span></h2>
                    <p class="lead">Onze koelkasten worden op meerdere criteria gecontroleerd voordat er word
                        vastgestelt of ze
                        in een gebruikte of nieuwe staat verkeren. En ze zijn goedgekeurd door meerdere keurmerken.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        src="images/approved.png" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">
        </div>


    </main>
    <footer class="text-muted text-center py-5 bg-dark">
        <div class="container">
            <p class="text-muted">&copy; 2022 Bob's Fridges.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>