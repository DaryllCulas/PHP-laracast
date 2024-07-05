<?php

namespace App\Covariance\Shelters;

use App\Covariance\Animals\Dog;

class DogShelter implements AnimalShelter
{
  public function adopt(string $name): Dog
  {
    return new Dog($name);
  }
}
