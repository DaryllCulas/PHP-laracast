<?php

declare(strict_types=1);

namespace App;

use App\Config;
use App\DB;
use App\Exceptions\RouteNotFoundException;



class App
{
  private static DB $db;
  public function __construct(protected \App\Router $routerObj, protected array $request, protected Config $config)
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

      echo \App\View::make('error/404');
    }
  }
}
