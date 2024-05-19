<?php

class Point
{

  public float $x;
  public float $y;
  public float $z;


  public function __construct(
    float $x = 45.4,
    float $y = 34.6,
    float $z = 67.8
  ) {

    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}
