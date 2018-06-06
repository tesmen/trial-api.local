<?php

$quoteId = (int)$_GET['id'];
$rate = (int)$_GET['rate'];
$name = (string)$_GET['name'];


if (empty($quoteId) || empty($rate) || empty($name)) {
    echo 'error';
    die;
}


function rate($quoteId, $rate, $name)
{
    $serverName = "localhost";
    $username = "tezmo";
    $password = "password";

    try {
        $pdo = new PDO("mysql:host=$serverName;dbname=tezmo_urls", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('INSERT INTO quotes (`quote_id`, `rate`, `name`) VALUES (:quote_id, :rate, :name)');
        $statement->bindParam('quote_id', $quoteId);
        $statement->bindParam('rate', $rate);
        $statement->bindParam('name', $name);
        $result = $statement->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $result;
}

$res = rate($quoteId, $rate, $name);

if ($res) {
    header('Content-Type: application/json');
    echo json_encode('ok!');
};