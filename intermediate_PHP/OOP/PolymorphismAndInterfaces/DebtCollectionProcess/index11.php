<?php

use App\PolymorphismInterfaces\CollectionAgency;
use App\PolymorphismInterfaces\DebtCollectionService;
use App\PolymorphismInterfaces\RockyTheDebtCollector;

require_once(__DIR__ . '/DebtCollector.php');
require_once(__DIR__ . '/CollectionAgency.php');
require_once(__DIR__ . '/DebtCollectionService.php');
require_once(__DIR__ . '/RockyTheDebtCollector.php');


// $collector = new CollectionAgency();
// echo "Amount collected: {$collector->collect(100)}" . PHP_EOL;

$service = new DebtCollectionService();
// echo $service->collectDebt(new CollectionAgency()) . PHP_EOL;
echo $service->collectDebt(new RockyTheDebtCollector()) . PHP_EOL;
