<?php

declare(strict_types=1);

namespace App\Controllers\Attributes;




#[\Attribute()]
class Get extends \App\Controllers\Attributes\Route
{
  public function __construct(string $routePath)
  {
    parent::__construct($routePath, 'get');
  }
}
