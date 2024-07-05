<?php

declare(strict_types=1);

namespace App\Contravariance;

use App\Contravariance\AnimalFood;

abstract class Animal
{
  protected string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function eat(AnimalFood $food)
  {
    echo $this->name . " eats " . get_class($food);
  }
}
