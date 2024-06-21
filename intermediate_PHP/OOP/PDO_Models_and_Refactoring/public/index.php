<?php


use App\App;
use App\Config;
use App\Exceptions\RouteNotFoundException;
use App\Router;

require_once(__DIR__ . '/../App.php');
require_once(__DIR__ . '/../DB.php');
require_once(__DIR__ . '/../Config.php');
require_once(__DIR__ . '/../Model.php');
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../models/SignUp.php');
require_once(__DIR__ . '/../models/Invoice.php');
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


$routerObj = new Router();

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
