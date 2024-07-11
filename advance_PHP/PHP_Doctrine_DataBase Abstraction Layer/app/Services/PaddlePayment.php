<?php

declare(strict_types=1);

namespace App\Services;


class PaddlePayment implements PaymentGatewayServiceInterface
{
  public function charge(array $customer, float $amount, float $tax): bool
  {
    echo 'Charging from Paddle Payment Gateway <br/>';
    return true;
  }
}
