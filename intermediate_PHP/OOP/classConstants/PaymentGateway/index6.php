<?php

require_once(__DIR__ . '/transactionv3.php');
// require_once('../vendor/autoload.php');


use PaymentGateway\Transactionv3\Transaction3;

// $transaction3 = new Transaction3();

echo Transaction3::STATUS_PAID;
echo PHP_EOL;
echo Transaction3::STATUS_PENDING;
echo PHP_EOL;
echo Transaction3::STATUS_DECLINED;
echo PHP_EOL;
echo Transaction3::STATUS_UNPAID;
