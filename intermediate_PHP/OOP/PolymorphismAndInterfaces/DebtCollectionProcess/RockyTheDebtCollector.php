<?php

namespace App\PolymorphismInterfaces;

class RockyTheDebtCollector implements DebtCollector
{
  public function collect(float $owedAmount): float
  {
    return $owedAmount * 0.65;
  }
}
