<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Attributes\Route;
use App\Views\View;


class GeneratorExampleController
{
  #[Route('/generator')]
  public function index(): View
  {
    return View::make('GeneratorExample.views');
  }
}
