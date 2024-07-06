<?php

declare(strict_types=1);

namespace App\Controllers\Attributes;


use Attribute;


#[Attribute]
class Route implements \App\Controllers\Attributes\RouteInterface
{

  public function __construct(public string $routePath, public string $method = 'get')
  {
  }
}
