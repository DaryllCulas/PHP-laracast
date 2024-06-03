<?php
require_once(__DIR__ . '/PrecedenceOrder/sayHello.php');
require_once(__DIR__ . '/PrecedenceOrder/sayWorld.php');
require_once(__DIR__ . '/PrecedenceOrder/myHelloWorld.php');




use PrecedenceOrder\Base\MyHelloWorld;


$callHelloWorld = new MyHelloWorld();
$callHelloWorld->sayHello();
