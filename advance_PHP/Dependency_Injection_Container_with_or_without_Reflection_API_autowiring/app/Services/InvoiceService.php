<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\EmailService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;

class InvoiceService
{
  // Dependency Injection here
  public function __construct(
    protected SalesTaxService $salesTaxService,
    protected PaymentGatewayService $paymentGatewayService,
    protected EmailService $emailService

  ) {
  }


  public function process(array $customer, float $amount): bool
  {


    // 1. calculate sales Tax
    $tax = $this->salesTaxService->calculate($amount, $customer);

    // 2. process invoice
    if (!$this->paymentGatewayService->charge($customer, $amount, $tax)) {
      return false;
    }

    // 3. send receipt
    $this->emailService->send($customer, 'receipt');

    return true;
  }
}
