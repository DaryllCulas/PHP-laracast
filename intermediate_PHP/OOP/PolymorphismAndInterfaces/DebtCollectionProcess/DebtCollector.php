<?php

namespace App\PolymorphismInterfaces;

interface DebtCollector
{

  public function collect(float $owedAmount): float;
}
