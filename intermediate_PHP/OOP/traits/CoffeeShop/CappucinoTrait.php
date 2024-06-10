<?php

namespace App;

trait CappucinoTrait
{
  private function makeCappucino()
  {
    echo static::class . ' is making cappucino ' . PHP_EOL;
  }
  public function makeLatte()
  {
    echo static::class . ' is making latte (UPDATED)' . PHP_EOL;
  }
}
