<?php

// use App\Classes\Home;
// use App\Classes\Invoice;
use App\Router;

// require_once(__DIR__ . '/Router.php');
// require_once(__DIR__ . '/Exceptions/RouteException.php');
// require_once(__DIR__ . '/Home.php');
// require_once(__DIR__ . '/Invoices.php');

require_once(__DIR__ . '/../controllers/Router.php');
require_once(__DIR__ . '/../BasicRoutings/Exceptions/RouteException.php');
require_once(__DIR__ . '/../controllers/HomeController.php');
require_once(__DIR__ . '/../controllers/InvoiceController.php');
require_once(__DIR__ . '/../views/View.php');

session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$routerObj = new Router();

$routerObj->get('/', [\App\Controllers\HomeController::class, 'index'])
  ->post('/upload', [\App\Controllers\HomeController::class, 'upload'])
  ->get('/invoice', [\App\Controllers\InvoiceController::class, 'index'])
  ->get('/invoice/create', [\App\Controllers\InvoiceController::class, 'create'])
  ->post('/invoice/create', [\App\Controllers\InvoiceController::class, 'store']);

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

echo $routerObj->resolve($requestUri, strtolower($_SERVER['REQUEST_METHOD']));

var_dump($_SESSION);
