<?php

$serverName = "localhost";
$username = "username";
$password = "password";
$hash = $_GET['hash'];

if (empty($hash)) {
    echo 'No hash!';
    die;
}

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=myDB", $username, $password);
    $statement = $pdo->prepare('SELECT * FROM my_table WHERE `hash` = :hash');
    $statement->bindParam('hash', $hash);
    $record = $statement->fetch();

    if (!$record) {
        echo 'Unknown hash!';
        die;
    }

    $url = $record['url'];

    header("localtion: $url");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
