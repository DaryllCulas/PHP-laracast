<?php

declare(strict_types=1);

namespace App\Inheritance;

class Toaster
{
  protected array $slices = [];
  protected int $size = 2;


  public function __construct()
  {
    $this->slices = [];
    $this->size = 2;
  }


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
