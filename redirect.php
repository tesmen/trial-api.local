<?php

$serverName = "localhost";
$username = "tezmo";
$password = "password";
$hash = $_GET['hash'];

if (empty($hash)) {
    echo 'No hash!';
    die;
}

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=tezmo_urls", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('SELECT * FROM `urls` where `hash`=:hash');
    $statement->bindParam('hash', $hash);
    $statement->execute();
    $record = $statement->fetch();

    if (!$record) {
        echo 'Unknown hash!';
        die;
    }

    $url = $record['url'];

    header("location: $url");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
