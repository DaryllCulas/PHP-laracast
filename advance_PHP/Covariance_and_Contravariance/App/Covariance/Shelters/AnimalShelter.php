<?php

namespace App\Covariance\Shelters;

use App\Covariance\Animals\Animal;

interface AnimalShelter
{
  public function adopt(string $name): Animal;
}
