<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class InvoiceController
{
  public function index(): View
  {
    unset($_SESSION['count']);
    // var_dump($_SESSION);

    return View::make('invoices/index.views');;
  }

  public function create(): View
  {

    return View::make('invoices/create.views');;
  }

  public function store()
  {
    $amount = $_POST['amount'];

    var_dump($amount);
  }
}
