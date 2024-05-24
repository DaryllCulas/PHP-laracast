<?php

namespace App\Inheritance;

// This is child class being inherited from

class ToasterPro extends Toaster
{

  public int $size = 4;

  public function __construct()
  {
    parent::__construct();
    $this->size = 6;
  }


  public function toastBagel()
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ": Toasting " . $slice . "with bagels option" . PHP_EOL;
    }
  }
}
