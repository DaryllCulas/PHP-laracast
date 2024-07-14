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


require_once(__DIR__ . '/../vendor/autoload.php');

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$items = [['Item 1', 1, 15], ['Item 2', 2, 7.5], ['Item 3', 4, 3.75]];

$invoice = (new Invoice())
  ->setAmount(45)
  ->setInvoiceNumber('1')
  ->setStatus(InvoiceStatus::PAID)
  ->setCreatedAt(new DateTime());



foreach ($items as [$description, $quantity, $unitPrice]) {
  $item = (new InvoiceItem())
    ->setDescription($description)
    ->setQuantity($quantity)
    ->setUnitPrice($unitPrice);

  $invoice->addItem($item);
}




// define('STORAGE_PATH', __DIR__ . '/../storage');
// define('VIEW_PATH', __DIR__ . '/../app/views');

// $container = new Container();
// $routerObj = new Router($container);

// $routerObj->registerRoutesFromControllerAttributes(
//   [
//     HomeController::class,
//     GeneratorExampleController::class,
//     InvoiceController::class

//   ]
// );


// (new App(
//   $container,
//   $routerObj,
//   ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
//   new Config($_ENV)
// ))->run();