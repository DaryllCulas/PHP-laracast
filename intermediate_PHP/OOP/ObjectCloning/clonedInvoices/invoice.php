<?php

namespace InvoiceSampleForCloningObject;


class Invoice
{
  private String $id;

  public function __construct()
  {
    $this->id = uniqid('invoice-');
    var_dump("This is __construct");
  }

  // public static function create(): static
  // {
  //   return new static();
  // }

  public function __clone(): void
  {
    $this->id = uniqid('invoice-');
    var_dump("This is __clone");
  }
}
