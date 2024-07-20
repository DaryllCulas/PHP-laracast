<?php

declare(strict_types=1);

namespace App\controllers;

use App\Contracts\EmailValidationInterface;
use App\Controllers\Attributes\Get;
use App\Services\Emailable\EmailValidationService;

class CurlController
{

  public function __construct(private EmailValidationInterface $emailValidationService)
  {
  }


  #[Get('/curl')]
  public function index()
  {
    $email = 'culasdaryll99@gmail.com';
    $result = $this->emailValidationService->verify($email);

    $score = $result->score;
    $isDeliverable = $result->isDeliverable;

    echo '<pre>';
    print_r($result);
    echo '</pre>';
  }
}