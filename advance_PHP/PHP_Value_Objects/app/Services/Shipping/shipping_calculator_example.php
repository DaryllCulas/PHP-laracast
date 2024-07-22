<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use App\Services\Shipping\BillableWeightCalculatorService;
use App\Services\Shipping\DimDivisor;
use App\Services\Shipping\PackageDimension;
use App\Services\Shipping\Weight;



$package = [
  'weight' => 6,
  'dimensions' => [
    'width' => 9,
    'length' => 11,
    'height'  => 7,
  ],
];



$packageDimensions = new PackageDimension(
  $package['dimensions']['width'],
  $package['dimensions']['height'],
  $package['dimensions']['length'],


);

$billableWeight = (new BillableWeightCalculatorService())->calculate(
  $packageDimensions,
  new Weight($package['weight']),
  DimDivisor::FEDEX
);


echo $billableWeight . ' lb' . PHP_EOL;
