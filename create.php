<?php
$serverName = "localhost";
$username = "tezmo";
$password = "password";
$url = $_GET['url'];

if (empty($url)) {
    die;
}

try {
    $hash = md5($url);
    $pdo = new PDO("mysql:host=$serverName;dbname=tezmo_urls", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('INSERT INTO urls (`hash`, `url`) VALUES (:hash, :url)');
    $statement->bindParam('hash', $hash);
    $statement->bindParam('url', $url);
    $result = $statement->execute();

    if ($result) {
        echo $hash;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
