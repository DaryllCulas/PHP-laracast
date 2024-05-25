<?php

namespace App\PolymorphismInterfaces;


class CollectionAgency implements DebtCollector
{

  /**
   *
   * @param float $owedAmount
   * @return float
   */



  public function collect(float $owedAmount): float
  {
    $guaranteed = $owedAmount * 0.5;
    return mt_rand($guaranteed, $owedAmount);
  }
}
