<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice
{
  public function index(): string
  {
    unset($_SESSION['count']);
    var_dump($_SESSION);
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
