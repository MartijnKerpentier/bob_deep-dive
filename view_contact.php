<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bekijk berichten · GameCollect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="contact.css">
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
                        <p class="text-muted">Bij deze pagina is een overzicht beschikbaar van de contactberichten
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Navigatie</h4>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="text-white">Home pagina</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-info shadow-sm">
            <div class="container">
                <a href="sign_in.php" class="navbar-brand d-flex align-items-center">
                    <img src="images/profile.png" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                    </img>
                    <strong>Bob Vance</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">GameCollect | Beheersysteem</h1>
                    <p class="lead text-muted">Op deze pagina kunnen de berichten bekeken worden om antwoord
                        te kunnen geven op de klanten.</p>
                    <p><a href="view.php" class="btn btn-dark my-1">Terug naar data beheren</a></p>
                </div>
            </div>

            <h2>Contact berichten</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Voornaam</th>
                            <th scope="col">Achternaam</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefoonnummer</th>
                            <th scope="col">Bericht</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($pdo->query('SELECT id FROM contact')->fetchAll()); $i++) {
                        ?>
                            <tr>
                                <td><?= $contactTable[$i]["id"] ?></td>
                                <td><?= $contactTable[$i]["voornaam"] ?></td>
                                <td><?= $contactTable[$i]["achternaam"] ?></td>
                                <td><?= $contactTable[$i]["email"] ?></td>
                                <td><?= $contactTable[$i]["telefoon"] ?></td>
                                <td><textarea placeholder="<?= $contactTable[$i]["bericht"] ?>" readonly></textarea></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
    <footer class="text-muted text-center py-5 bg-dark">
        <div class="container">
            <p class="text-muted">&copy; 2022 Bob's Fridges.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>