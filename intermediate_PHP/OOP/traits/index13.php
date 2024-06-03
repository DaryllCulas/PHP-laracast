<?php

require_once(__DIR__ . '/PrecedenceOrder/sayHello.php');
require_once(__DIR__ . '/PrecedenceOrder/sayWorld.php');
require_once(__DIR__ . '/PrecedenceOrder/myHelloWorld.php');
require_once(__DIR__ . '/AlternatePrecedenceOrder/traitHelloWorld.php');
require_once(__DIR__ . '/AlternatePrecedenceOrder/TheWorldIsNotEnough.php');




use PrecedenceOrder\Base\MyHelloWorld;


$callHelloWorld = new MyHelloWorld();
$callHelloWorld->sayHello();

echo PHP_EOL;
$altPrecedenceWorld = new TheWorldIsNotEnough();
$altPrecedenceWorld->sayHello2();
