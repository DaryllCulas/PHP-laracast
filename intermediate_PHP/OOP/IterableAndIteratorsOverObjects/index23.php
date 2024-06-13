<?php

use IterableInvoices\InvoiceCollection;
use IterableInvoices\InvoiceProcess;


require_once(__DIR__ . "/Invoices.php");
require_once(__DIR__ . "/InvoiceCollection.php");


// foreach (new InvoiceProcess(25) as $key => $value) {
//   echo $key . ' = ' . $value . PHP_EOL;
// }


$invoiceCollection = new InvoiceCollection([
  new InvoiceProcess(25),
  new InvoiceProcess(25),
  new InvoiceProcess(25)
]);


foreach ($invoiceCollection as $invoice) {

  echo $invoice->id . ' = ' . $invoice->amount . PHP_EOL;
}


function foo(iterable $iterable)
{
  foreach ($iterable as $i => $item) {
    echo $i . PHP_EOL;
  }
}


foo($invoiceCollection);
