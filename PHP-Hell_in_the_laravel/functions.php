<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urlIs($value)
{
  if (isset($_SERVER['REQUEST_URI'])) {
    return $_SERVER['REQUEST_URI'] === $value;
  } else {
    // Handle the case where 'REQUEST_URI' is not set
    return false;
  }
}
