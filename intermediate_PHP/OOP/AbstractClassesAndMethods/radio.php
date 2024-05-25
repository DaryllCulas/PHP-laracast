<?php

declare(strict_types=1);

namespace App\AbstractClassesAndMethods;


class Radio extends Boolean
{

  public function render(): string
  {
    return <<<HTML
    <input type="radio" name="{$this->name}" value="{$this->name}"/>
    HTML;
  }
}
