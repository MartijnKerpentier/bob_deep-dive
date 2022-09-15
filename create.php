<?php
include('connect.php');
if (isset($_POST['koelkast_foto'])) {
    $image = $_POST["koelkast_foto"];
    $description = $_POST["beschrijving"];
    $article = $_POST["artikelnummer"];
    $state = $_POST["status"];
    $price = $_POST["prijs"];
}
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO 
        `koelkasten`
        (`koelkast_foto`, `beschrijving`, `artikelnummer`, `koelkast_status`, `prijs`)
        VALUES 
        ('$image', '$description', '$article', '$state', '$price')";
        $pdo->exec($sql);
    header("Location: view.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voeg data toe · Bob's Fridges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="form-validation/form-validation.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Data toevoegen</h2>
                <p class="lead">Door dit onderstaande formulier in te vullen is het mogelijk om nieuwe data toe te voegen aan het beheersysteem.</p>
                <hr class="my-4">
                <p class="lead text-info">'Foto van de koelkast' bevat het adres van de gewenste afbeelding.</p>
                <p class="lead text-info">Artikelnummer heeft een maximaal aantal van 11 cijfers.</p>
                <p class="lead text-info">Status kan alleen gebruikt of nieuw zijn.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Data gegevens</h4>
                    <form class="needs-validation" action="create.php" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="koelkast_foto" class="form-label">Foto van de koelkast</label>
                                <input type="text" class="form-control" name="koelkast_foto" placeholder="adreslink" required>
                                <div class="invalid-feedback">
                                    Adreslink is nodig.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="beschrijving" class="form-label">Korte beschrijving van koelkast</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" name="beschrijving" placeholder="beschrijving" required>
                                    <div class="invalid-feedback">
                                        Beschrijving is nodig.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="artikelnummer" class="form-label">Artikelnummer van de koelkast</label>
                                <input type="text" name="artikelnummer" class="form-control" placeholder="artikelnummer" required>
                                <div class="invalid-feedback">
                                    Artikelnummer is nodig.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="status" class="form-label">Status van de koelkast</label>
                                <input type="text" class="form-control" name="status" placeholder="gebruikt/nieuw" required>
                                <div class="invalid-feedback">
                                    Vul de status van de koelkast in.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="prijs" class="form-label">Geschatte prijs van de koelkast</label>
                                <input type="text" class="form-control" name="prijs" placeholder="geschatte prijs" required>
                                <div class="invalid-feedback">
                                    Vul de geschatte prijs van de koelkast in.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Data toevoegen aan beheersysteem</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="text-muted text-center py-5">
            <div class="container">
                <p class="mb-1">&copy; 2023 Bob's Fridges</p>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="form-validation/form-validation.js"></script>
</body>

</html>