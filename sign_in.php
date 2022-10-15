<?php

include('connect.php');

$adminUsername = $pdo->query('SELECT gebruikersnaam FROM users WHERE id = 1')->fetch();
$adminPassword = $pdo->query('SELECT wachtwoord FROM users WHERE id = 1')->fetch();

if (isset($_POST['submit'])) {
    for ($i = 0; $i < count($pdo->query('SELECT id FROM users')->fetchAll()); $i++) {
        if ($adminUsername['gebruikersnaam'] === $_POST['gebruikersnaam'] && $adminPassword['wachtwoord'] === $_POST['wachtwoord']) {
            $_SESSION['isUserAdmin'] = true;
            $_SESSION['adminUser'] = $adminUsername['gebruikersnaam'];
            header('Location: index.php');
        } elseif ($usersTable[$i]['gebruikersnaam'] === $_POST['gebruikersnaam'] && $usersTable[$i]['wachtwoord'] == $_POST['wachtwoord']) {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['user'] = $usersTable[$i]['gebruikersnaam'];
            header('Location: index.php');
        } else {
            header('Location: sign_in.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggen · Bob's Fridges</title>
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

<body class="text-center">

    <header>
        <div class="collapse bg-info" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Over deze pagina:</h4>
                        <p class="text-muted">Bij deze pagina is het mogelijk in te loggen bij jouw account.
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <hr>
    <main class="form-signin w-100 m-auto">
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" method="post" action="sign_in.php">
                                <div class="controls">
                                    <div class="col">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Gebruikersnaam</label>
                                                <input id="form_name" type="text" name="gebruikersnaam" class="form-control" placeholder="Vul uw gebruikersnaam in" required="required" data-error="gebruikersnaam is vereist">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Wachtwoord</label>
                                                <input id="form_lastname" type="password" name="wachtwoord" class="form-control" placeholder="Vul uw wachtwoord in" required data-error="wachtwoord is vereist">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col">
                                    <div class="col-md-12">
                                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Log in</button>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="col">
                                    <h3>Nog geen account? Registreer je bij ons!</h3>
                                    <div class="col-md-12">
                                        <a href="sign_up.php" class="w-100 btn btn-primary btn-lg">Registreren</a>
                                    </div>
                                </div>
                        </div>
                        </form>
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