<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\BirdType;

final class Bird
{
  public function __construct(protected BirdType $birdType)
  {
  }
  public function fly(): string
  {
    return $this->birdType->fly();
  }
}
