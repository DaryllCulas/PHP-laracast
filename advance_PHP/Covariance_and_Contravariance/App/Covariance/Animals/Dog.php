<?php

namespace App\Covariance\Animals;

class Dog extends Animal
{
  public function speak()
  {
    echo $this->name . "'Barks!'";
  }
}
