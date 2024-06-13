<?php

namespace IterableObjectsTwo;

class MyClass
{
  public $var1 = 'Value 1';
  public $var2 = 'Value 2';
  public $var3 = 'Value 3';

  protected $protected = 'Protected Value';
  private $private = 'Private Value';

  public function iterateVisible()
  {
    echo "MyClass::iterateVisible()" . PHP_EOL;
    foreach ($this as $key => $value) {
      print("$key: => $value\n");
    }
  }
}
