<?php

namespace StaticProps;

class DB
{

  private static ?DB $instance = null;


  public function __construct(public array $config)
  {
    echo 'Instance Created' . PHP_EOL;
  }

  public static function getInstance(array $config): DB
  {
    if (self::$instance === null) {
      self::$instance = new DB($config);
    }

    return self::$instance;
  }
}
