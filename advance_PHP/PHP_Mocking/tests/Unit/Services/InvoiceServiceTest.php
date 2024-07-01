<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\EmailService;
use App\Services\InvoiceService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{

  #[Test]
  public function testProcessesInvoice(): void
  {

    $salesTaxServiceMock = $this->createMock(SalesTaxService::class);

    $paymentGatewayServiceMock = $this->createMock(PaymentGatewayService::class);

    $emailServiceMock = $this->createMock(EmailService::class);

    // stubs
    $paymentGatewayServiceMock->method('charge')->willReturn(true);


    // given invoice service
    $invoiceService = new InvoiceService(
      $salesTaxServiceMock,
      $paymentGatewayServiceMock,
      $emailServiceMock
    );

    $customer = ['name' => 'Gio'];
    $amount = 150;

    // when process is called
    $result = $invoiceService->process($customer, $amount);


    // then assert invoice is processed properly
    $this->assertTrue($result);
  }
}
