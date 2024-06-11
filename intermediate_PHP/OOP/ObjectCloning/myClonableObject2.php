<?php

namespace cloneObject;

class MyClonableObject
{
  public $object1;
  public $object2;

  function __clone()
  {
    $this->object1 = clone $this->object1;
  }
}
