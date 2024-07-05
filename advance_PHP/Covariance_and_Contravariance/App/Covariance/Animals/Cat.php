<?php

namespace App\Covariance\Animals;

use App\Covariance\Animals\Animal;

class Cat extends Animal
{
  public function speak()
  {
    echo $this->name . "'Meows'";
  }
}
