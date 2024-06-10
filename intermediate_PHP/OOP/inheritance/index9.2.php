<?php

require_once(__DIR__ . '/sample2/A.php');
require_once(__DIR__ . '/sample2/B.php');
require_once(__DIR__ . '/sample2/C.php');


echo PHP_EOL;
$a = new A();
$b = new B();
echo PHP_EOL;
echo 'B:C =' . $b->c;
echo PHP_EOL;
echo 'B:D =' . $b->d;
echo PHP_EOL;
$c = new C();
echo PHP_EOL;

print_r($a);
print_r($b);
print_r($c);


print_r(A::$d);
print_r(B::$d);
print_r(C::$d);

echo PHP_EOL;
$R = new ReflectionClass('B');
print_r($R->getDefaultProperties());
print_r($R->getStaticProperties());
