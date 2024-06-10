<?php

namespace App;

class CappucinoMaker extends CoffeeMaker
{
  use \App\CappucinoTrait {
    \App\CappucinoTrait::makeCappucino as public;
  }
}
