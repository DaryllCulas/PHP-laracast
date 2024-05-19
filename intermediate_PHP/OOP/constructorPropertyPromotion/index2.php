<?php

require_once('./constructorPropertyPromotion.php');
require_once('./nullSafeOperator.php');



$objConstructorHere = new Point();

print_r($objConstructorHere);


// This is for null safe operations
$empObj = new Emp();
$dept = $empObj?->getAddress()?->dept?->iso_code;
print_r($dept);
