<?php

declare(strict_types=1);

namespace App\Classes;


class Home
{
  public function index(): string
  {
    setcookie(
      'userName',
      'Makarov',
      time() + 10,
      '/',
      '',
      false,
      false
    );

    $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
    return 'Home';
  }
}
