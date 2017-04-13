<?php
$serverName = "localhost";
$username = "username";
$password = "password";
$url = $_GET['url'];

if (empty($url)) {
    die;
}

try {
    $hash = md5($url);
    $pdo = new PDO("mysql:host=$serverName;dbname=myDB", $username, $password);
    $statement = $pdo->prepare('INSERT INTO my_table (`hash`, `url`) VALUES (:hash, :url)');
    $statement->bindParam('hash', $hash);
    $statement->bindParam('url', $url);
    $result = $statement->execute();

    if ($result) {
        echo $hash;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
