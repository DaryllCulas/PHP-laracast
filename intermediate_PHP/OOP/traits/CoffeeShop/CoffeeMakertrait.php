<?php

namespace App;

trait CoffeeMakerTrait
{
  public function makeCoffee()
  {
    echo static::class . ' is making coffee ' . PHP_EOL;
  }
}
