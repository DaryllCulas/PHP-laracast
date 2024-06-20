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

      $db = new PDO('mysql:host=localhost:3307;dbname=TestDB', 'root', '', [PDO::ATTR_EMULATE_PREPARES => false]);
    } catch (PDOException $e) {

      throw new PDOException($e->getMessage(), (int) $e->getCode());
    }

    $userEmail = 'maydayParade27@gmail.com';
    $full_name = 'Derek Sanders';
    $amount = 25;

    try {
      $db->beginTransaction();

      $newUserStmt = $db->prepare('INSERT INTO users (userEmail, full_name, is_active, created_at) VALUES (?, ?, 1, NOW())');
      $newInvoiceStmt = $db->prepare('INSERT INTO invoices (amount, user_id)
          VALUES (?, ?)');

      $newUserStmt->execute([$userEmail, $full_name]);
      $userId = (int) $db->lastInsertId();

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
