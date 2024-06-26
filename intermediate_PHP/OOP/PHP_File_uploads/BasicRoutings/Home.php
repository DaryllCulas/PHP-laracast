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
    return '<form action="/upload" method="post" enctype="multipart/form-data">
      <input type="file" name="receipt"/>
      <button type="submit">Upload</button>
    </form>';
  }

  public function upload()
  {
    echo '<pre>';
    var_dump($_FILES);

    echo '</pre>';


    $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
    move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

    echo '<pre>';
    var_dump(pathinfo($filePath));
    echo '</pre>';
  }
}
