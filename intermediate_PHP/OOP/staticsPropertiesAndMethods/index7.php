<?php
require_once(__DIR__ . '/PaymentGateway4/transaction.php');

use PaymentGateway4\Transaction\Transaction4 as Transaction4;

$transaction4Obj = new Transaction4(45, 'Successfully paid');
print_r($transaction4Obj->process());
