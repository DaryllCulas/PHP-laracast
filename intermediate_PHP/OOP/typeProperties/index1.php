<?php

require_once('./transactions.php');


$objTransaction1 = (new Transaction(100, '2020-01-01'))
  ->addTax(7)
  ->applyDiscount(10)
  ->getAmount();



print("$$objTransaction1");





// $objTransaction1->addTax(8);
// $objTransaction1->applyDiscount(10);


// print("$$objTransaction1->amount = Date: $objTransaction1->description\n");

// var_dump($objTransaction1->getAmount());
