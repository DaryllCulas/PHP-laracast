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

      $db = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
    } catch (PDOException $e) {

      throw new PDOException($e->getMessage(), (int) $e->getCode());
    }

    $userEmail = 'theallamericanrejects@gmail.com';
    $full_name = 'Ronnie Winter';
    $amount = 25;

    try {
      $db->beginTransaction();

      $newUserStmt = $db->prepare('INSERT INTO users (userEmail, full_name, is_active, created_at) VALUES (?, ?, 1, NOW())');
      $newInvoiceStmt = $db->prepare('INSERT INTO invoices (amount, user_id)
          VALUES (?, ?)');

      $newUserStmt->execute([$userEmail, $full_name]);
      $userId = (int) $db->lastInsertId();
      var_dump($userId);

      throw new \Exception('Test');

      $newInvoiceStmt->execute([$amount, $userId]);

      $db->commit();
    } catch (\Throwable $e) {
      if ($db->inTransaction()) {
        $db->rollBack();
      }
    }

    $fetchStmt = $db->prepare(
      'SELECT invoices.invoice_id AS invoice_id, amount, user_id, full_name
        FROM invoices
        INNER JOIN users ON user_id = users.id
        WHERE userEmail = ?'
    );

    $fetchStmt->execute([$userEmail]);

    echo '<pre>';
    var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
    echo '</pre>';
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
