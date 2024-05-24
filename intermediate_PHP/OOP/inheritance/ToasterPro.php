<?php

namespace App\Inheritance;

class ToasterPro
{
  public array $slices = [];
  public int $size = 4;


  public function addSlice(string $sliceString): void
  {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $sliceString;
    }
  }

  public function toast()
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ": Toasting " . $slice . PHP_EOL;
    }
  }
}
