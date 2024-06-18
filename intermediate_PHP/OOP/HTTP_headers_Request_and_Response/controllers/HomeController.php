<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;


class HomeController
{
  public function index(): View
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

    // return (new View('index'))->render();

    return View::make('index', ['pageName' => 'Home']);
  }

  public function download()
  {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="receipt.pdf"');

    readfile(STORAGE_PATH . '/receipt.pdf');
  }

  public function upload()
  {
    echo '<pre>';
    var_dump($_FILES);

    echo '</pre>';


    $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
    move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

    // echo '<pre>';
    // var_dump(pathinfo($filePath));
    // echo '</pre>';
    header('Location: /');
    exit;
  }
}
