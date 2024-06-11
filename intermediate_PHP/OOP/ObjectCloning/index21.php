<?php

require_once(__DIR__ . '/myClonableObject2.php');
require_once(__DIR__ . '/subObject1.php');


$obj = new \cloneObject\MyClonableObject();

$obj->$object1 = new \cloneObject\SubObject();
$obj->$object2 = new \cloneObject\SubObject();

$obj2 = clone $obj;

print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);
