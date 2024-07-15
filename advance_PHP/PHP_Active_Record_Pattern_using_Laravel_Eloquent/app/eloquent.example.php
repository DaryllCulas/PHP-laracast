<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

var_dump($dotenv);

$capsule = new Capsule;

$params = [
  'driver' => 'mysql',
  'host' => $_ENV['DB_HOST'],
  'username' => $_ENV['DB_USER'],
  'database' => $_ENV['DB_DATABASE'],
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',
];

$capsule->addConnection($params);

// Set the event dispatcher used by Eloquent models...(optional)
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods...(optional)
$capsule->setAsGlobal();


// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();