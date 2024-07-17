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



$queryBuilder = $entityManager->createQueryBuilder();




$query = $queryBuilder
  ->select('i', 'it')
  ->from(Invoice::class, 'i')
  ->join('i.items', 'it')
  ->where(
    $queryBuilder->expr()->andX(
      $queryBuilder->expr()->gt('i.amount', ':amount'),
      $queryBuilder->expr()->orX(
        $queryBuilder->expr()->eq('i.status', ':status'),
        $queryBuilder->expr()->gte('i.createdAt', ':date'),
      )
    )
  )

  ->setParameter('amount', 100)
  ->setParameter('status', InvoiceStatus::PAID->value)
  ->setParameter('date', '2022-01-01')
  ->orderBy('i.createdAt', 'DESC')
  ->getQuery();



$invoices = $query->getResult();




/** @var Invoice $invoice */

foreach ($invoices as $invoice) {
  echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
    . ' , ' . $invoice->getAmount()
    . ' , ' . $invoice->getStatus()->toString() . PHP_EOL;

  foreach ($invoice->getItems() as $item) {
    echo ' - ' . $item->getDescription()
      . ', ' . $item->getQuantity()
      . ', ' . $item->getUnitPrice() . PHP_EOL;
  }
}
