<?php


use App\Controllers\HomeController;
use App\Services\Container;


require_once(__DIR__ . '/../vendor/autoload.php');

use App\App;
use App\Config;
use App\Controllers\GeneratorExampleController;
use App\Controllers\InvoiceController;
use App\Controllers\Router;
use App\Controllers\UserController;

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../app/views');

$container = new Container();
$routerObj = new Router($container);


$routerObj->registerRoutesFromControllerAttributes(
  [
    HomeController::class,
    GeneratorExampleController::class,
    InvoiceController::class,
    UserController::class

  ]
);






// echo '<pre>';
// print_r($routerObj->routes());
// echo '</pre>';


// $routerObj->get('/', [\App\Controllers\HomeController::class, 'index'])
//   ->post('/upload', [\App\Controllers\HomeController::class, 'upload'])
//   ->get('/invoice', [\App\Controllers\InvoiceController::class, 'index'])
//   ->get('/invoice/create', [\App\Controllers\InvoiceController::class, 'create'])
//   ->post('/invoice/create', [\App\Controllers\InvoiceController::class, 'store'])
//   ->get('/invoice/create/generator', [\App\Controllers\GeneratorExampleController::class, 'index']);




(new App(
  $container,
  $routerObj,
  ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
  new Config($_ENV)
))->run();
