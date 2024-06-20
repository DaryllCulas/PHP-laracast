<?php


use App\Exceptions\RouteNotFoundException;
use App\Router;


require_once(__DIR__ . '/../controllers/Router.php');
require_once(__DIR__ . '/../BasicRoutings/Exceptions/RouteException.php');
require_once(__DIR__ . '/../controllers/HomeController.php');
require_once(__DIR__ . '/../controllers/InvoiceController.php');
require_once(__DIR__ . '/../views/View.php');
require_once(__DIR__ . '/../vendor/autoload.php');

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


try {

  $routerObj = new Router();

  $routerObj->get('/', [\App\Controllers\HomeController::class, 'index'])
    ->post('/upload', [\App\Controllers\HomeController::class, 'upload'])
    ->get('/invoice', [\App\Controllers\InvoiceController::class, 'index'])
    ->get('/invoice/create', [\App\Controllers\InvoiceController::class, 'create'])
    ->post('/invoice/create', [\App\Controllers\InvoiceController::class, 'store']);

  $requestUri = $_SERVER['REQUEST_URI'] ?? '/';

  echo $routerObj->resolve($requestUri, strtolower($_SERVER['REQUEST_METHOD']));

  var_dump($_SESSION);
} catch (RouteNotFoundException $e) {

  http_response_code(404);

  echo \App\View::make('error/404');
}
