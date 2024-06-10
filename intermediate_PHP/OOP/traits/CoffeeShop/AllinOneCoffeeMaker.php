<?php

namespace App;

class AllInOneCoffeeMaker extends \App\CoffeeMaker
{
  use \App\CappucinoTrait {
    CappucinoTrait::makeLatte insteadof LatteTrait;
  }

  // set to public
  use \App\CappucinoTrait {
    \App\CappucinoTrait::makeCappucino as public;
  }
  use \App\LatteTrait;
}
