<?php


class Outer
{
  private $prop1 = 1;
  protected $prop2 = 2;


  protected function func1()
  {
    return 3;
  }

  public function func2()
  {
    return new class($this->prop1) extends Outer
    {
      private $prop3;

      public function __construct($prop)
      {
        $this->prop3 = $prop;
      }

      public function func3()
      {
        return 'The answer is ' . $this->prop2 + $this->prop3 + $this->func1();
      }
    };
  }
}
