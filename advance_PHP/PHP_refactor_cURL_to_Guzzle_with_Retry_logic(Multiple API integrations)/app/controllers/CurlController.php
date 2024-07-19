<?php

declare(strict_types=1);

namespace App\controllers;

use App\Controllers\Attributes\Get;
use App\Services\Emailable\EmailValidationService;

class CurlController
{

  public function __construct(private EmailValidationService $emailValidationService)
  {
  }


  #[Get('/curl')]
  public function index()
  {
    $email = 'culasdaryll99@gmail.com';
    $result = $this->emailValidationService->verify($email);

    echo '<pre>';
    print($result);
    echo '</pre>';
  }
}