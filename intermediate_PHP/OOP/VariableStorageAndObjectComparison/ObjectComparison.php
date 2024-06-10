<?php

namespace ObjectComparison;

function bool2str($bool)
{
  if ($bool === false) {
    return "False";
  } else {
    return "True";
  }
}
function compareObjects(&$obj1, &$obj2)
{
  echo 'object1 == object2: ' . bool2str($obj1 == $obj2) . PHP_EOL;
  echo 'object1 != object2: ' . bool2str($obj1 != $obj2) . PHP_EOL;
  echo 'object1 === object2: ' . bool2str($obj1 === $obj2) . PHP_EOL;
  echo 'object1 == object2: ' . bool2str($obj1 !== $obj2) . PHP_EOL;
}


class Flag
{
  public $flag;
  function __construct($flag = true)
  {
    $this->flag = $flag;
  }
}

class OtherFlag
{
  public $flag;

  function __construct($flag = true)
  {
    $this->flag = $flag;
  }
}
