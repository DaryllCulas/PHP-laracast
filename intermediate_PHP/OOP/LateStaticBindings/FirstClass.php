<?php

namespace LateStaticBindings;

class A
{
  protected static string $name = 'First Class';

  public static function getName(): string
  {
    return static::$name;
    // return self::$name; //earyl binding
  }
}
