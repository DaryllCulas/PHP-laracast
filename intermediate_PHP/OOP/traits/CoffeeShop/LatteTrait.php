<?php

namespace App;

trait LatteTrait
{
  private string $milkType = 'whole milk';
  public function makeLatte()
  {
    echo static::class . ' is making latte with ' . $this->milkType . PHP_EOL;
  }

  public static function mixLatte()
  {
    echo 'Mixing latte by ' . static::class;
  }

  public function setMilkType(string $milkType): static
  {
    $this->milkType = $milkType;
    return $this;
  }
}
