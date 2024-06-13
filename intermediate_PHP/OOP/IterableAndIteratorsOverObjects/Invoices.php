<?php


namespace IterableInvoices;

class InvoiceProcess
{
  public String $id;

  public function __construct(public float $amount)
  {
    $this->id = random_int(10000, 99999);
  }
}
