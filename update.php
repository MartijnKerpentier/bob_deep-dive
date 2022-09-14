<?php
include('connect.php');
// Decide on get id or post id
$id = $_GET['id'] ?? $_POST['id'];
if (!isset($_GET['id'])) {
    $id2 = $_POST['id'];
} else {
    $id2 = $_GET['id'];
}
// Form is submitted
if (isset($_POST["id"])) {
    $image = $_POST["koelkast_foto"];
    $description = $_POST["beschrijving"];
    $articleNumber = $_POST["artikelnummer"];
    $state = $_POST["status"];
}
if (isset($_POST["submit"])) {
    $sql = "UPDATE koelkasten SET
            `koelkast_foto`='$image',
            `beschrijving`='$description',
            `artikelnummer`='$articleNumber',
            `koelkast_status`='$state'
            WHERE id=$id";
    $pdo->exec($sql);
    header("Location: view.php");
}
$fridgeTable2 = $pdo->query('SELECT * FROM koelkasten WHERE id = ' . $id2)->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig data · Bob's Fridges</title>
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
                <p class="lead text-muted">Bij foto moet je het adres van de afbeelding neerzetten.</p>
                <p class="lead text-muted">Artikelnummer heeft een maximaal aantal van 11 cijfers.</p>
                <p class="lead text-muted">Status kan alleen gebruikt of nieuw zijn.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Data gegevens</h4>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="koelkast_foto" class="form-label">Foto van de koelkast</label>
                                <input type="text" class="form-control" name="koelkast_foto" value="<?= $fridgeTable2['koelkast_foto'] ?>" required>
                                <div class="invalid-feedback">
                                    Adreslink is nodig.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="beschrijving" class="form-label">Korte beschrijving van koelkast</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" name="beschrijving" value="<?= $fridgeTable2['beschrijving'] ?>" required>
                                    <div class="invalid-feedback">
                                        Beschrijving is nodig.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="artikelnummer" class="form-label">Artikelnummer van de koelkast</label>
                                <input type="text" name="artikelnummer" class="form-control" value="<?= $fridgeTable2['artikelnummer'] ?>" required>
                                <div class="invalid-feedback">
                                    Artikelnummer is nodig.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Status van de koelkast</label>
                                <input type="text" class="form-control" name="status" value="<?= $fridgeTable2['koelkast_status'] ?>" required>
                                <div class="invalid-feedback">
                                    Vul de status van de koelkast in.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Data wijzigen</button>
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