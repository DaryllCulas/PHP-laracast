<?php

namespace App\Covariance\Shelters;

use App\Covariance\Animals\Cat;

class CatShelter implements AnimalShelter
{
  public function adopt(string $name): Cat
  {
    return new Cat($name);
  }
}
