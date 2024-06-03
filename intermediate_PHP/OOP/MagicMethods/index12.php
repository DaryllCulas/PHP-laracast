<?php

use App\MagicMethods\Invoice;
use App\MagicMethods\Invoice2;

require_once(__DIR__ . '/magicMethods.php');


// $invoiceObj = new Invoice();
// $invoiceObj->amount = 150;

// var_dump(isset($invoiceObj->amount));
// var_dump($invoiceObj);

// unset($invoice->amount);
// var_dump($invoiceObj);



$invoiceObj2 = new Invoice2();
$invoiceObj2->process(1, 2, 3, 5);
$invoiceObj2::process(1, 2, 3, 5);
$invoiceObj2->process2(45, 'This is description');
echo PHP_EOL;
echo $invoiceObj2;
echo PHP_EOL;
$invoiceObj2();
var_dump(is_callable($invoiceObj2));
echo PHP_EOL;
var_dump($invoiceObj2);
echo (string) $invoiceObj2;
