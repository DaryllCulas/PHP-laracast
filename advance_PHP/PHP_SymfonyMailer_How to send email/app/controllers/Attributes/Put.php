<?php

declare(strict_types=1);

namespace App\Controllers\Attributes;

use App\Attributes\Route;
use App\Enums\HttpMethod;


#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Put extends \App\Controllers\Attributes\Route
{

  public function __construct(string $routePath)
  {
    parent::__construct($routePath, HttpMethod::Put);
  }
}
