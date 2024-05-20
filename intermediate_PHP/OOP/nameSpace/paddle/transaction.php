<?php

declare(strict_types=1);


namespace PaymentGateway\Paddle;

use Paddle\CustomerProfile;
use DateTime;
use Email;

class Transaction
{
  public function __construct()
  {
    // var_dump(new CustomerProfile);
    // print_r(new \DateTime('now'));
    // print_r(new DateTime);
    print_r(new Email);
  }

  public function transaction1()
  {
    echo "This is transaction 1";
  }
}
