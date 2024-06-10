<?php

require_once(__DIR__ . '/PrecedenceOrder/sayHello.php');
require_once(__DIR__ . '/PrecedenceOrder/sayWorld.php');
require_once(__DIR__ . '/PrecedenceOrder/myHelloWorld.php');
require_once(__DIR__ . '/AlternatePrecedenceOrder/traitHelloWorld.php');
require_once(__DIR__ . '/AlternatePrecedenceOrder/TheWorldIsNotEnough.php');
require_once(__DIR__ . '/MultipleTraitsUsage/traitHello.php');
require_once(__DIR__ . '/MultipleTraitsUsage/traitWorld.php');
require_once(__DIR__ . '/MultipleTraitsUsage/MyHelloWorld.php');




// Precedence Order
use PrecedenceOrder\Base\MyHelloWorld;

$callHelloWorld = new MyHelloWorld();
$callHelloWorld->sayHello();

echo PHP_EOL;

// Alternate Precedence Order
$altPrecedenceWorld = new TheWorldIsNotEnough();
$altPrecedenceWorld->sayHello2();

echo PHP_EOL;

// Multiple traits usage
$combinedHW = new MyHelloWorldCombined();
$combinedHW->sayHello();
$combinedHW->sayWorld();
$combinedHW->sayExclamationMark();
