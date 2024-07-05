<?php

namespace App\Covariance\Animals;

abstract class Animal
{
  protected string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  abstract public function speak();
}
