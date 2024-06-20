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
      var_dump($_ENV['DB_HOST']);

      // $db = new PDO('mysql:$_ENV[DB_HOST];dbname=TestDB', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

      $db = new PDO(
        'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
      );

      $email = 'piercetheveil123@gmail.com';
      $username = 'victorfuentes9090';

      // $query = 'INSERT INTO user (email, username) VALUES (:email, :username)';
      $query = 'SELECT * FROM user';


      $stmt = $db->prepare($query);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':username', $username);
      $stmt->execute();



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
