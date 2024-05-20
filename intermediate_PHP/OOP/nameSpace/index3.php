<?php

require_once('../nameSpace/stripe/transaction.php');
require_once('../nameSpace/paddle/transaction.php');
require_once('../nameSpace/paddle/customerProfile.php');
require_once('../nameSpace/notification/email.php');

// print_r(new \PaymentGateway\Paddle\Transaction());
// print_r(new \PaymentGateway\Stripe\Transaction());


use \PaymentGateway\Paddle\Transaction;


print_r(new Transaction());
