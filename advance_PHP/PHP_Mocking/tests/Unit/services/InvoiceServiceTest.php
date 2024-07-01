<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use App\Services\InvoiceService;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{

  #[Test]
  public function it_process_invoice(): void
  {

    // given invoice service
    $invoiceService = new InvoiceService();

    // when process is called
    $customer = ['name' => 'Lebron James'];
    $amount = 2000;

    $result = $invoiceService->process($customer, $amount);


    // then assert invoice is processed successfully
    $this->assertTrue($result);
  }
}
