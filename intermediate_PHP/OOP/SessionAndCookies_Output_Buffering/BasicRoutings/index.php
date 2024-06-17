<?php

// use App\Classes\Home;
// use App\Classes\Invoice;
use App\Router;

require_once(__DIR__ . '/Router.php');
require_once(__DIR__ . '/Exceptions/RouteException.php');
require_once(__DIR__ . '/Home.php');
require_once(__DIR__ . '/Invoices.php');

session_start();

$routerObj = new Router();

$routerObj->get('/', [\App\Classes\Home::class, 'index'])
  ->get('/invoice', [\App\Classes\Invoice::class, 'index'])
  ->get('/invoice/create', [\App\Classes\Invoice::class, 'create'])
  ->post('/invoice/create', [\App\Classes\Invoice::class, 'store']);

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

echo $routerObj->resolve($requestUri, strtolower($_SERVER['REQUEST_METHOD']));

var_dump($_SESSION);
