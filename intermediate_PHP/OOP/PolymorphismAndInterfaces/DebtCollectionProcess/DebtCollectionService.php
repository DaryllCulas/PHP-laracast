<?php


namespace App\PolymorphismInterfaces;

use App\PolymorphismInterfaces\DebtCollector;

// use App\PolymorphismInterfaces\CollectionAgency;

class DebtCollectionService
{
  public function collectDebt(DebtCollector $collector)
  {
    $owedAmount = mt_rand(100, 1000);
    $collectedAmount = $collector->collect($owedAmount);

    echo 'Amount of collected by Debt Collection Service: ' . '$' . $collectedAmount . ' out of '  . '$' . $owedAmount . PHP_EOL;
  }
}
