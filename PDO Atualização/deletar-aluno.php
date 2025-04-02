<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->prepare("DELETE FROM students WHERE id = ?");
$statement->bindValue(1, 3, PDO::PARAM_INT);

var_dump($statement->execute());

// $statement->bindValue(1, 4, PDO::PARAM_INT);
// var_dump($statement->execute());