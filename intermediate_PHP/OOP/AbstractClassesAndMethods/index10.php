<?php


require_once(__DIR__ . '/field.php');
require_once(__DIR__ . '/text.php');
require_once(__DIR__ . '/boolean.php');
require_once(__DIR__ . '/radio.php');
require_once(__DIR__ . '/checkbox.php');



$fields = [

  new \App\AbstractClassesAndMethods\Text('textField'),
  new \App\AbstractClassesAndMethods\CheckBox('checkBoxField'),
  new \App\AbstractClassesAndMethods\Radio('radioField'),
];



foreach ($fields as $field) {
  echo $field->render() . '<br/>';
}
