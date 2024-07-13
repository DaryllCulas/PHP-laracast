<?php


use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Connection;



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

// $stmt = $conn->prepare('SELECT * FROM Ticket WHERE created_at BETWEEN :from AND :to');
// $from = new DateTime('2019-01-01');
// $to = new DateTime('2019-02-01');

// $stmt->bindValue(':from', $from, 'datetime');
// $stmt->bindValue(':to', $to, 'datetime');

// // $stmt->bindValue(':id', 100);
// $result = $stmt->executeQuery();
// var_dump($result->fetchAssociative());


$ids = [1, 2, 3];
$result = $conn->executeQuery('SELECT id, created_at FROM Ticket WHERE id IN (:ids)', ['ids' => $ids], ['ids' => \Doctrine\DBAL\ParameterType::INTEGER]);
var_dump($result->fetchAllAssociative());
