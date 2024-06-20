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
      $db = new PDO('mysql:host=localhost:3307;dbname=TestDB', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

      // SQL INJECTION if you want type this: http://localhost:3304/?userEmail=niceone@gmail.com%22+OR+1=1+--+

      // $email = $_GET['userEmail'];

      // $query = 'SELECT * FROM users WHERE userEmail = "' . $email . '"';

      // echo $query . '<br/>';



      $userEmail = 'johnnysins233@gmail.com';
      $full_name = 'Johnny sin';
      $isActive = 1;
      $createdAt = date('Y-m-d H:i:s', strtotime('07/11/2021 12:00PM'));
      $query = 'INSERT INTO users(userEmail, full_name, is_active, created_at) VALUES (:userEmail, :full_name, :isActive, :createdAt)';

      $stmt = $db->prepare($query);
      $stmt->execute([
        'userEmail' => $userEmail,
        'full_name' => $full_name,
        'isActive' => $isActive,
        'createdAt' => $createdAt
      ]);

      $id = (int) $db->lastInsertId();
      $users = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();

      echo '<pre>';
      var_dump($users);
      echo '</pre>';
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
