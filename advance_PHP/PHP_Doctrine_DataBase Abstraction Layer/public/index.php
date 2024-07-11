<?php

use Doctrine\DBAL\DriverManager;


require_once(__DIR__ . '/../vendor/autoload.php');




session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$connectionParams = [
  'dbname' => $_ENV['DB_DATABASE'],
  'user' => $_ENV['DB_USER'],
  'host' => $_ENV['DB_HOST'],
  'driver' => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];
$conn = DriverManager::getConnection($connectionParams);

$stmt = $conn->prepare('SELECT * FROM Ticket WHERE id = :id');
$stmt->bindValue(':id', 100);
$result = $stmt->executeQuery();
var_dump($result->fetchAssociative());
