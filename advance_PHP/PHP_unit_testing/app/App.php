<?php

declare(strict_types=1);

namespace App;

use App\Config;
use App\Controllers\Router;
use App\DB;
use App\Exceptions\RouteNotFoundException;
use App\Views\View;



class App
{
  private static DB $db;
  public function __construct(protected Router $routerObj, protected array $request, protected Config $config)
  {
    static::$db = new DB($config->db ?? []);
  }

  public static function db(): DB
  {
    return static::$db;
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
