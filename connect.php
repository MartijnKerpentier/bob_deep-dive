<?php
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
$dbname = "bobs_fridges";
$charset = "utf8mb4";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$fridgeTable = $pdo->query('SELECT * FROM koelkasten')->fetchAll();