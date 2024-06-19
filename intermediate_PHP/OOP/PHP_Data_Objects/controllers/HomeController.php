<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;
use PDOException;

class HomeController
{
  public function index(): View
  {

    try {
      $db = new PDO('mysql:host=localhost:3307;dbname=TestDB', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

      $email = 'hesujisaz2334@gmail.com';
      $username = 'niceone1234524';
      $query = 'SELECT * FROM user WHERE username = :username';
      $stmt = $db->prepare($query);
      $stmt->execute([':username' => $username]);

      foreach ($stmt as $user) {
        echo '<pre>';
        var_dump($user);
        echo '</pre>';
      }
    } catch (PDOException $e) {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
    }



    var_dump($db);

    return View::make('index', ['pageName' => 'Home']);
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
