<?php

declare(strict_types=1);

use App\App;
use App\Config;
use App\Controllers\GeneratorExampleController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\Router;
use Illuminate\Container\Container;




require_once(__DIR__ . '/../vendor/autoload.php');


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
    InvoiceController::class
  ]
);

(new App(
  $container,
  $routerObj,
  ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
  new Config($_ENV)
))->boot()->run();
