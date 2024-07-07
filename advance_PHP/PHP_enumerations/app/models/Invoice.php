<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use App\Model;
use PDO;

class Invoice extends Model
{

  public function create(float $amount, int $userId): int
  {
    $stmt = $this->db->prepare('INSERT INTO invoices (amount, user_id)
          VALUES (?, ?)');

    $stmt->execute([$amount, $userId]);


    return (int) $this->db->lastInsertId();
  }

  public function find(int $invoiceId): ?array
  {
    $stmt = $this->db->prepare(
      'SELECT invoices.invoice_id AS invoice_id, amount, user_id, full_name
          FROM invoices
          INNER JOIN users ON user_id = users.id
          WHERE invoice_id = ?'
    );


    $stmt->execute([$invoiceId]);
    $invoice = $stmt->fetch();

    return $invoice ? $invoice : null;
  }


  public function all(InvoiceStatus $status): array
  {



    $stmt = $this->db->prepare(
      'SELECT id,  invoiceNumber, amount, status
      FROM invoices_table
      WHERE status = ?'
    );


    $stmt->execute([$status->value]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}