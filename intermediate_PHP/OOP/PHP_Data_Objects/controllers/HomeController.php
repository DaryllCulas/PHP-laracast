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
      $db = new PDO('mysql:host=localhost:3307;dbname=TestDB', 'root', '', [PDO::ATTR_EMULATE_PREPARES => false]);

      // SQL INJECTION if you want type this: http://localhost:3304/?userEmail=niceone@gmail.com%22+OR+1=1+--+

      // $email = $_GET['userEmail'];

      // $query = 'SELECT * FROM users WHERE userEmail = "' . $email . '"';

      // echo $query . '<br/>';



      $userEmail = 'hard away4@gmail.com';
      $full_name = 'hard away III';
      $is_active = 1;
      $created_at = date('Y-m-d H:i:s', strtotime('07/11/2021 12:00PM'));


      $query = 'INSERT INTO users(userEmail, full_name, is_active, created_at, updated_at) VALUES (:userEmail, :full_name, :is_active, :created_at1, :created_at2)';

      $stmt = $db->prepare($query);

      $stmt->bindValue('userEmail', $userEmail);
      $stmt->bindValue('full_name', $full_name);
      $stmt->bindValue('is_active', $is_active, PDO::PARAM_BOOL);
      $stmt->bindValue('created_at1', $created_at);
      $stmt->bindValue('created_at2', $created_at);



      $stmt->execute();

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
