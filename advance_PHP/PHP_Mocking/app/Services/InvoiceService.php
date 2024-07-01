<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\EmailService;
use App\Services\PaymentGateWayService;
use App\Services\SalesTaxService;

class InvoiceService
{
  public function process(array $customer, float $amount): bool
  {
    $salesTaxService = new SalesTaxService();
    $gatewayService = new PaymentGateWayService();
    $emailService = new EmailService();


    // Calculate sales tax
    $tax = $salesTaxService->calculate($amount, $customer);

    // Process Invoice

    if (!$gatewayService->charge($customer, $amount, $tax)) {
      return false;
    }
    // Send receipt
    $emailService->send($customer, 'receipt');



    return true;
  }
}
