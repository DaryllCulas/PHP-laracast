<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice
{
  public function index(): string
  {
    return 'Invoices';
  }

  public function create(): string
  {
    return '<form action="/invoice/create" method="post"><label>Amount: <input type="text" name="amount"></label><button type="submit">Create</button></form>';
  }

  public function store()
  {
    $amount = $_POST['amount'];

    var_dump($amount);
  }
}
