<?php

require_once('../nameSpace/stripe/transaction.php');
require_once('../nameSpace/paddle/transaction.php');
require_once('../nameSpace/paddle/customerProfile.php');
require_once('../nameSpace/notification/email.php');

// print_r(new \PaymentGateway\Paddle\Transaction());
// print_r(new \PaymentGateway\Stripe\Transaction());


// use \PaymentGateway\Paddle\Transaction;
use \PaymentGateway\Paddle;
use \PaymentGateway\Stripe\Transaction as StripeTransaction;

// print_r(new Transaction());

$paddleTransaction = new Paddle\Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new Paddle\CustomerProfile();

print_r($paddleTransaction);
print_r($stripeTransaction);
print_r($paddleCustomerProfile);


// you can var_dump with multiple objects (classes)

// var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);
