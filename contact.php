<?php
include('connect.php');
if (isset($_POST['voornaam'])) {
    $name = $_POST["voornaam"];
    $surname = $_POST["achternaam"];
    $email = $_POST["email"];
    $telNumber = $_POST["telefoon"];
    $message = $_POST["bericht"];
}
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO 
        `contact`
        (`voornaam`, `achternaam`, `email`, `telefoon`, `bericht`)
        VALUES 
        ('$name', '$surname', '$email', '$telNumber', '$message')";
    $pdo->exec($sql);
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact · Bob's Fridges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                        <p class="text-muted">Bij deze pagina is een formulier zichtbaar waar u als klant met
                            ons contact kan opnemen.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Navigatie</h4>
                        <ul class="list-unstyled">
                            <li><a href="index.html" class="text-white">Home</a></li>
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
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="images/profile.png" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                    </img>
                    <strong>Inloggen</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1>Bob's Fridges · Contactformulier</h1>
            </div>

            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">

                            <div class="container">
                                <form id="contact-form" role="form" method="post" action="contact.php">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Voornaam</label>
                                                    <input id="form_name" type="text" name="voornaam" class="form-control" placeholder="Vul uw voornaam in" required="required" data-error="Voornaam is vereist">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Achternaam</label>
                                                    <input id="form_lastname" type="text" name="achternaam" class="form-control" placeholder="Vul uw achternaam in" required data-error="Achternaam is vereist">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Vul uw email in" required data-error="Email is vereist">
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_phone">Telefoonnummer</label>
                                                    <input id="form_phone" type="tel" name="telefoon" class="form-control" placeholder="Vul uw telefoonnummer in" required data-error="Telefoonnummer is vereist">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Bericht</label>
                                                    <textarea id="form_message" name="bericht" class="form-control" placeholder="Laat hier uw bericht achter" rows="4" required data-error="Geef een bericht door"></textarea>
                                                </div>
                                                <br>
                                            </div>

                                            <div class="col-md-12">
                                                <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Informatie verzenden</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted text-center py-5 bg-dark">
        <div class="container">
            <p class="text-muted">&copy; 2022 Bob's Fridges.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>