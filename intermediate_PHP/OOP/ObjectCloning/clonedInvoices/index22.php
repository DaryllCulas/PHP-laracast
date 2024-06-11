<?php



require_once(__DIR__ . '/invoice.php');


$invoice = new \InvoiceSampleForCloningObject\Invoice();

$invoice2 = clone $invoice;

var_dump($invoice, $invoice2, $invoice === $invoice2);
