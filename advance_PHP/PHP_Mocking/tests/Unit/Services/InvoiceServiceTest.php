<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\InvoiceService;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{

  #[Test]
  public function it_processes_invoice(): void
  {

    // given invoice service
    $invoiceService = new InvoiceService();

    $customer = ['name' => 'Gio'];
    $amount = 150;

    // when process is called
    $result = $invoiceService->process($customer, $amount);


    // then assert invoice is processed properly
    $this->assertTrue($result);
  }
}
