<?php

use App\Services\Container;


require_once(__DIR__ . '/../vendor/autoload.php');

use App\App;
use App\Config;
use App\Controllers\Router;



session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../app/views');

$container = new Container();
$routerObj = new Router($container);

$routerObj->get('/', [\App\Controllers\HomeController::class, 'index'])
  ->post('/upload', [\App\Controllers\HomeController::class, 'upload'])
  ->get('/invoice', [\App\Controllers\InvoiceController::class, 'index'])
  ->get('/invoice/create', [\App\Controllers\InvoiceController::class, 'create'])
  ->post('/invoice/create', [\App\Controllers\InvoiceController::class, 'store']);



(new App(
  $routerObj,
  ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
  new Config($_ENV)
))->run();
