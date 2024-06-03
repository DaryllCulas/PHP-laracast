<?php


namespace PrecedenceOrder;

trait SayWorld
{
  public function sayHello()
  {
    parent::sayHellow();
    echo "World!";
  }
}
