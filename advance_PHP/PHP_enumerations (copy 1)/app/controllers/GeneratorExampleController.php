<?php

declare(strict_types=1);

namespace App\Controllers;



use App\Controllers\Attributes\Get;
use App\Views\View;


class GeneratorExampleController
{
  #[Get('/generator')]
  public function index(): View
  {
    return View::make('GeneratorExample.views');
  }
}
