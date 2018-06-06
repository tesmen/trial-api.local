<?php

$lines = file('quotes.txt');

$id = rand(0, sizeof($lines) - 1);

function getLikes($quoteId)
{
    $serverName = "localhost";
    $username = "tezmo";
    $password = "password";

    try {
        $pdo = new PDO("mysql:host=$serverName;dbname=tezmo_urls", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM quotes WHERE `quote_id` = :quote_id');
        $statement->bindParam('quote_id', $quoteId);
        $result = $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return false;
}


$data = [
    'id'    => $id,
    'text'  => $lines[$id],
    'rates' => getLikes($id),
];

header('Content-Type: application/json');
echo json_encode($data);