<?php

declare(strict_types=1);

namespace App\Enums;

use App\Controllers\Attributes\Route;

enum HttpMethod: string
{
  case Get = 'get';
  case Post = 'post';
  case Put = 'put';
}
