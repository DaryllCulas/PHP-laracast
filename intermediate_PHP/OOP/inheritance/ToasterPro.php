<?php

namespace App\Inheritance;

// This is child class being inherited from

class ToasterPro extends Toaster
{

  public int $size = 4;

  public function __construct()
  {
    parent::__construct(); // When calling parent class constructor always put here at first
    $this->size = 6;
  }

  public function addSlice(string $sliceString): void
  {
    parent::addSlice($sliceString);
  } // Overriding parent method


  public function toastBagel()
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ": Toasting " . $slice . " with bagels option" . PHP_EOL;
    }
  }
}
