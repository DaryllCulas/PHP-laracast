<?php

namespace App\PolymorphismInterfaces;


class CollectionAgency implements DebtCollector, AnotherInterface
{

  /**
   *
   * @param float $owedAmount
   * @return float
   */

  public function __construct()
  {
  }

  public function collect(float $owedAmount): float
  {
    return $owedAmount;
  }
}
