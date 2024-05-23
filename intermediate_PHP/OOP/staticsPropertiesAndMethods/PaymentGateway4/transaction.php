<?php

declare(strict_types=1);


namespace PaymentGateway4\Transaction;

class Transaction4
{

  public static int $count = 0;
  public function __construct(
    public float $amount,
    public string $description
  ) {
  }

  public function process()
  {
    echo 'Processing transaction';
  }
}
