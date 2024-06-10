<?php

require_once(__DIR__ . '/FirstClass.php');
require_once(__DIR__ . '/SecondClass.php');

$classA = new \LateStaticBindings\A();
$classB = new \LateStaticBindings\B();


// echo $classA->getName();
// echo PHP_EOL;
// echo $classB->getName();



echo $classA::getName();
echo PHP_EOL;
echo $classB::getName();
