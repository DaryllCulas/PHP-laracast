<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\BirdType;

final class FlyingBird implements BirdType
{
  public function fly(): string
  {
    return 'I am flying!';
  }
}
