<?php

declare(strict_types=1);

namespace App;

/**
 * @property-read array $db
 */

class Config
{
  protected array $config = [];

  public function __construct(array $env)
  {

    $this->config = [
      'db' => [
        'host' => $env['DB_HOST'],
        'username' => $env['DB_USER'],
        'database' => $env['DB_DATABASE'],
        'driver' => $env['DB_DRIVER'] ?? 'mysql',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
      ]
    ];
  }


  public function __get(string $name)
  {
    return $this->config[$name] ?? null;
  }
}
