<?php

declare(strict_types=1);


namespace PaymentGateway4\Transaction;

class Transaction4
{
  private static int $count = 0;
  public function __construct(public float $amount, public string $description)
  {
    self::$count++;
  }

  public static function getCount(): int
  {
    return self::$count;
  }
  public function process()
  {
    echo 'Processing transaction';
  }
}
