<?php

declare(strict_types=1);

namespace App\Covariance\Animals;

use App\Contravariance\Animal;
use App\Contravariance\AnimalFood;

class Cat extends Animal
{
  public function eat(AnimalFood $food)
  {
    echo $this->name . " eats " . get_class($food);
  }
}
