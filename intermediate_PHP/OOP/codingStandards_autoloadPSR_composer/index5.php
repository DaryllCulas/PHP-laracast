<?php
require_once('../codingStandards_autoloadPSR_composer/paddle2/transaction2.php');
require_once('../codingStandards_autoloadPSR_composer/paddle2/customerProfile2.php');
require_once('../codingStandards_autoloadPSR_composer/stripe2/transaction.php');
require_once('../codingStandards_autoloadPSR_composer/notification2/email2.php');

// Autoloaders (It should comment out those imported above)
spl_autoload_register(function ($class) {
  var_dump('Autoloader1');
});


spl_autoload_register(function ($class) {
  var_dump('Autoloader2');
});



use \PaymentGatewayV2\Stripe\TransactionV2 as StripeTransactionV2;;



$paddleTransactionV2 = new \PaymentGatewayV2\Paddle\Transaction2();
$stripeTransactionV2 = new StripeTransactionV2;
$emailNotificationV2 = new \Notification2\Email\EmailV2();



print_r($paddleTransactionV2);
print_r($stripeTransactionV2);
print_r($emailNotificationV2);






// Using composer packages
use Ramsey\Uuid\UuidFactory;

require __DIR__ . '/../vendor/autoload.php';

// $id = new \Ramsey\Uuid\UuidFactory(); // Prepended
$id = new UuidFactory();


echo $id->uuid4();
