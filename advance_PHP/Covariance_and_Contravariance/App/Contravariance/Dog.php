<?php

declare(strict_types=1);

namespace App\Covariance\Animals;

use App\Contravariance\Animal;
use App\Contravariance\Food;

class Dog extends Animal
{
  public function eat(Food $food)
  {
    echo $this->name . " eats " . get_class($food);
  }
}
