<?php

declare(strict_types=1);

namespace App;

use App\Config;
use App\Controllers\Router;
use App\DB;
use App\Exceptions\RouteNotFoundException;
use App\Services\Container;
use App\Services\PaddlePayment;
use App\Services\PaymentGatewayService;
use App\Services\PaymentGatewayServiceInterface;
use App\Views\View;
use Dotenv\Dotenv;

class App
{
  private static DB $db;
  // public static Container $container;

  public function __construct(protected Container $container, protected Router $routerObj, protected array $request, protected Config $config)
  {
    static::$db = new DB($config->db ?? []);

    // $this->container->set(PaymentGatewayServiceInterface::class, fn (Container $c) => $c->get(PaymentGatewayService::class));

    // $this->container->set(PaymentGatewayServiceInterface::class, PaymentGatewayService::class);
    $this->container->set(PaymentGatewayServiceInterface::class, PaddlePayment::class);
  }

  public static function db(): DB
  {
    return static::$db;
  }


  public function boot(): static
  {
    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $this->config = new Config($_ENV);
    static::$db = new DB($this->config->db ?? []);

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
