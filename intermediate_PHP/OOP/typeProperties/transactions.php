<?php

declare(strict_types=1);

class Transaction
{
  private float $amount;
  private string $description;

  public function __construct(float $amount, string $description)
  {
    $this->amount = $amount;
    $this->description = $description;
  }

  public function addTax(float $rate): Transaction
  {
    $this->amount += $this->amount * $rate / 100;

    return $this;
  }

  public function applyDiscount(float $rate): Transaction
  {
    $this->amount -= $this->amount * $rate / 100;

    return $this;
  }

  // if the modifier is private, we can use private modifier access within the class to be invoked in the outside of the class

  public function getAmount(): float
  {
    return $this->amount;
  }
}
