<?php



use MultipleTraitsUsage\Hello;
use MultipleTraitsUsage\World;

class MyHelloWorldCombined
{
  use Hello;
  use World;
  public function sayExclamationMark()
  {
    echo '!';
  }
}
