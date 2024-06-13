<?php

namespace IterableInvoices;

class InvoiceCollection implements \Iterator
{
  public function __construct(public array $invoices)
  {
  }

  public function current(): mixed
  {

    echo __METHOD__ . PHP_EOL;
    return current($this->invoices);
  }


  public function key(): mixed
  {
    echo __METHOD__ . PHP_EOL;
    return key($this->invoices);
  }


  public function next(): void
  {
    echo __METHOD__ . PHP_EOL;
    next($this->invoices);
  }


  public function rewind(): void
  {
    echo __METHOD__ . PHP_EOL;
    reset($this->invoices);
  }


  public function valid(): bool
  {
    echo __METHOD__ . PHP_EOL;
    return current($this->invoices) !== false;
  }
}
