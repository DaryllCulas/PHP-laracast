<?php
require_once(__DIR__ . '/PaymentGateway8/transaction.php');

use PaymentGateway8\Transaction8 as Transaction;

$transaction8Obj = new Transaction(450.00, 'True');


print_r($transaction8Obj->process());
echo PHP_EOL;


// if the properties are restricted like private and protected access modifiers, we can use reflection api to access them here

$reflectionPropertyOnTransaction8Obj = new ReflectionProperty(Transaction::class, 'amount');

$reflectionPropertyOnTransaction8Obj->setAccessible(true);
print_r($reflectionPropertyOnTransaction8Obj->getValue($transaction8Obj)) . PHP_EOL;


// call the private methods (generateReceipt() and sendEmail()) using reflectionProperty here
$reflectionMethodGenerateReceipt = $reflectionPropertyOnTransaction8Obj->getDeclaringClass()->getMethod('generateReceipt');
$reflectionMethodGenerateReceipt->setAccessible(true);
echo $reflectionMethodGenerateReceipt->invoke($transaction8Obj) . PHP_EOL;

$reflectionMethodSendEmail = $reflectionPropertyOnTransaction8Obj->getDeclaringClass()->getMethod('sendEmail');
$reflectionMethodSendEmail->setAccessible(true);
echo $reflectionMethodSendEmail->invoke($transaction8Obj) . PHP_EOL;
