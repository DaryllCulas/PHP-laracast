<?php
require_once(__DIR__ . '/PaymentGateway4/transaction.php');
require_once(__DIR__ . '/DB.php');

use PaymentGateway4\Transaction\Transaction4 as Transaction4;
use StaticProps\DB as DBNamespace;

$transaction4Obj = new Transaction4(45, 'Successfully paid');
$transaction4Obj = new Transaction4(45, 'Successfully paid');
$transaction4Obj = new Transaction4(45, 'Successfully paid');
$transaction4Obj = new Transaction4(45, 'Successfully paid');
$transaction4Obj = new Transaction4(45, 'Successfully paid');
var_dump($transaction4Obj->process());
print_r(PHP_EOL);
var_dump($transaction4Obj::getCount());
print_r(PHP_EOL);


// $DBobj = new DBNamespace([]);
// $DBobj::getInstance([]);
// $DBobj::getInstance([]);
// $DBobj::getInstance([]);
// $DBobj::getInstance([]);
// $DBobj::getInstance([]);

DBNamespace::getInstance([]);
DBNamespace::getInstance([]);
DBNamespace::getInstance([]);
DBNamespace::getInstance([]);
DBNamespace::getInstance([]);

// It will print 5 times print instantiated

// // $DBobj::getInstance([]);
// $db = new DBNamespace([]);
// $db = new DBNamespace([]);
// $db = new DBNamespace([]);
// $db = new DBNamespace([]);
// $db = new DBNamespace([]);
