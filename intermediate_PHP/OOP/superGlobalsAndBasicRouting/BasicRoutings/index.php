<?php

// use App\Classes\Home;
// use App\Classes\Invoice;
use App\Router;

require_once(__DIR__ . '/Router.php');
require_once(__DIR__ . '/Exceptions/RouteException.php');
require_once(__DIR__ . '/Home.php');
require_once(__DIR__ . '/Invoices.php');


$routerObj = new Router();

$routerObj->register('/', [\App\Classes\Home::class, 'index'])
  ->register('/invoices', [\App\Classes\Invoice::class, 'index'])
  ->register('/invoices/create', [\App\Classes\Invoice::class, 'create']);

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
// $home = new \App\Classes\Home(); // Create an instance of the Home class
// $invoice = new \App\Classes\Invoice(); // Create an instance of the Invoice class
echo $routerObj->resolve($requestUri);
