<?php

declare(strict_types=1);

use App\App;
use App\Config;
use App\Controllers\GeneratorExampleController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\Router;
use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Enums\InvoiceStatus;
use App\Services\Container;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;




require_once(__DIR__ . '/../vendor/autoload.php');

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$params = [
  'driver' => 'pdo_mysql',
  'host' => $_ENV['DB_HOST'],
  'user' => $_ENV['DB_USER'],
  'dbname' => $_ENV['DB_DATABASE'],
];

$entityManager = new EntityManager(
  DriverManager::getConnection($params),
  ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/Entity'])
);

// $query = $entityManager->createQuery(
//   'SELECT i.createdAt, i.amount FROM App\Entity\Invoice i WHERE i.amount > :amount ORDER BY i.createdAt DESC'
// );

// $query->getResult();

$queryBuilder = $entityManager->createQueryBuilder();

$query = $queryBuilder
  ->select('i')
  ->from(Invoice::class, 'i')
  ->where('i.amount > :amount')
  ->setParameter('amount', 100)
  ->orderBy('i.createdAt', 'DESC')
  ->getQuery();

// echo $query->getDQL();

$invoices = $query->getResult();
// var_dump($invoices);


foreach ($invoices as $invoice) {
  echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
    . ' , ' . $invoice->getAmount()
    . ' , ' . $invoice->getStatus()->toString() . PHP_EOL;
}
