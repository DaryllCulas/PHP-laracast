<?php

declare(strict_types=1);

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../eloquent.php';

Capsule::connection()->transaction(function () {

  $invoice = new Invoice();

  $invoice->amount = 45;
  $invoice->invoice_number = 'INV001';
  $invoice->status = InvoiceStatus::PENDING;
  // $invoice->due_date = (new Carbon())->addDays(10);

  $invoice->save();

  $items = [['item 1', 1, 2], ['item 2', 3, 4.5], ['item 3', 5, 6.5]];


  // Iterate over the invoice items
  foreach ($items as [$description, $quantity, $unitPrice]) {

    $item = new InvoiceItem();

    $item->description = $description;
    $item->quantity = $quantity;
    $item->unit_price = $unitPrice;


    $item->invoice()->associate($invoice);
    $item->save();
  }
});
