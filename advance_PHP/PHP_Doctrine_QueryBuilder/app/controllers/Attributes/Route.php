<?php

declare(strict_types=1);

namespace App\Controllers\Attributes;

use App\Enums\HttpMethod;
use Attribute;


#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_METHOD)]
class Route implements \App\Controllers\Attributes\RouteInterface
{

  public function __construct(public string $routePath, public HttpMethod $method = HttpMethod::Get)
  {
  }
}
