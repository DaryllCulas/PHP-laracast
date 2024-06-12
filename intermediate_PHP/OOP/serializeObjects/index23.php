<?php

require_once(__DIR__ . '/SampleOneForSerialization/PageOne.php');


$invoiceToSerialize = new \SerializeObjects\Invoice(25, 'Invoice 1', '454345345234234');

$serializingObj = serialize($invoiceToSerialize);
var_dump($serializingObj);
echo PHP_EOL;
$unserializingObj = unserialize($serializingObj);
var_dump($unserializingObj);
