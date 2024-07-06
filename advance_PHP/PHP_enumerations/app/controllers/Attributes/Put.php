<?php

declare(strict_types=1);

namespace App\Controllers\Attributes;

use App\Attributes\Route;


#[\Attribute()]
class Put extends \App\Controllers\Attributes\Route
{

  public function __construct(string $routePath)
  {
    parent::__construct($routePath, 'put');
  }
}
