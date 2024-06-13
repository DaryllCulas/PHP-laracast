<?php

require_once(__DIR__ . "/myClass.php");


$classObjToIterate = new \IterableObjectsTwo\MyClass();

foreach ($classObjToIterate as $key => $value) {
  print("$key => $value\n");
}
echo PHP_EOL;

$classObjToIterate->iterateVisible();
