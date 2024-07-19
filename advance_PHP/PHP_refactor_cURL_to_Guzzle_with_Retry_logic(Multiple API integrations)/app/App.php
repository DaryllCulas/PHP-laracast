<?php

declare(strict_types=1);

namespace App;

use App\Config;
use App\Contracts\EmailValidationInterface;
use App\Controllers\Router;
use App\Exceptions\RouteNotFoundException;
// use App\Services\Emailable\EmailValidationService;
use App\Services\AbstractAPI\EmailValidationService;
use App\Views\View;
use Dotenv\Dotenv;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

class App
{


  public function __construct(protected Container $container, protected Router $routerObj, protected array $request, protected Config $config)
  {
  }

  public function initDb(array $config)
  {

    $capsule = new Capsule;

    $capsule->addConnection($config);
    $capsule->setEventDispatcher(new Dispatcher($this->container));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
  }



  public function boot(): static
  {
    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $this->config = new Config($_ENV);
    $this->initDb($this->config->db);


    // $this->container->bind(EmailValidationInterface::class, fn () => new EmailValidationService($this->config->apiKeys['emailable']));
    $this->container->bind(EmailValidationInterface::class, fn () => new EmailValidationService($this->config->apiKeys['abstract_api_email_validation']));
    return $this;
  }


  public function run()
  {
    try {
      echo $this->routerObj->resolve($this->request['uri'], strtolower($this->request['method']));
    } catch (RouteNotFoundException) {

      http_response_code(404);

      echo View::make('error/404');
    }
  }
}