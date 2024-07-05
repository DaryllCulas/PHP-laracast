<?php


namespace App\Views;

use Generator;

class GeneratorExample
{
  public function index()
  {
    $numbers = $this->lazyRange(1, 1000);

    echo $numbers->current();
    $numbers->next();
    echo $numbers->current();
    $numbers->next();

    echo $numbers->getReturn();
  }


  private function lazyRange(int $start, int $end): Generator
  {
    echo 'Hello';
    for ($i = $start; $i <= $end; $i++) {
      yield $start;

      echo 'World';

      yield $end;

      return '!';
    }
  }
}
