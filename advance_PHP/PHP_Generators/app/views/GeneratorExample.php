<?php


namespace App\Views;

use Generator;

class GeneratorExample
{
  public function index()
  {
    $numbers = $this->lazyRange(1, 1000);

    foreach ($numbers as $number) {
      echo $number . '<br>';
    }
  }


  private function lazyRange(int $start, int $end): Generator
  {
    for ($i = $start; $i <= $end; $i++) {
      yield $i;
    }
  }
}
