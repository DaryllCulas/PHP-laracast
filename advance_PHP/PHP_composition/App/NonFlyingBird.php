<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\BirdType;

final class NonFlyingBird implements BirdType
{
  public function fly(): string
  {
    return 'I can\'t fly!';
  }
}
