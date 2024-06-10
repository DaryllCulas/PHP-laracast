<?php

// namespace SampleInheritance;

class A
{
  private $a = 'private'; // private
  protected $b = 'protected'; // protected
  public $c  = 'public'; // public
  static $d = 'static'; // static


  public function __construct()
  {
    $this->e = 'constructed';
  }
  public function __set($property, $value)
  {
    echo 'set ' . $property . '=' . $value;
    $this->property = $value;
  }

  public function __get($property)
  {
    echo 'get' . $property;
    $this->$property = 'dynamic'; // Invoke property
    return $this->property;
  }
}
