<?php

use ObjectComparison\Flag;
use ObjectComparison\OtherFlag;
use function ObjectComparison\compareObjects;

require_once(__DIR__ . '/ObjectComparison.php');

$o = new Flag;
$p = new Flag;
$q = $o;
$r = new OtherFlag;


echo "Two instances of the same class " . PHP_EOL;
compareObjects($o, $q);

echo PHP_EOL;

echo "Two references to the same instance" . PHP_EOL;
compareObjects($o, $q);

echo PHP_EOL;

echo "Instances of two different classes" . PHP_EOL;
compareObjects($o, $r);
