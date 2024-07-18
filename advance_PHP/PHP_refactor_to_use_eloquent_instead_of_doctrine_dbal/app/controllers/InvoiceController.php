<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Attributes\Get;
use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Views\View;

class InvoiceController
{
  #[Get('/invoices')]
  public function index(): View
  {

    $invoices = Invoice::query()->where('status', InvoiceStatus::FAILED)->get()->toArray();
    return View::make('invoices/index.views', ['invoices' => $invoices]);;
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
