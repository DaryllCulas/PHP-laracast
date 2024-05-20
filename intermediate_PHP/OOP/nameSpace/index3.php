<?php

require_once('../nameSpace/stripe/transaction.php');
require_once('../nameSpace/paddle/transaction.php');


print_r(new \PaymentGateway\Paddle\Transaction());
print_r(new \PaymentGateway\Stripe\Transaction());
