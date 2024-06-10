<?php

use App\AllInOneCoffeeMaker;
use App\CappucinoMaker;
use App\CoffeeMaker;
use App\LatteMaker;

require_once(__DIR__ . '/CoffeeMakertrait.php');
require_once(__DIR__ . '/LatteTrait.php');
require_once(__DIR__ . '/CappucinoTrait.php');
require_once(__DIR__ . '/CoffeeMaker.php');
require_once(__DIR__ . '/LatteMaker.php');
require_once(__DIR__ . '/CappucinoMaker.php');
require_once(__DIR__ . '/AllinOneCoffeeMaker.php');



$coffeeMakerObj = new CoffeeMaker();
$coffeeMakerObj->makeCoffee();

$latteMakerObj = new LatteMaker();
$latteMakerObj->makeLatte();


$cappucinoMakerObj = new CappucinoMaker();
$cappucinoMakerObj->makeCappucino();


$allinOneCoffeeMakerObj = new AllInOneCoffeeMaker();
$allinOneCoffeeMakerObj->makeCoffee();
$allinOneCoffeeMakerObj->makeLatte();
