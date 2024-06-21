<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class Invoice extends Model
{

  public function create(float $amount, int $userId): int
  {
    $stmt = $this->db->prepare('INSERT INTO invoices (amount, user_id)
          VALUES (?, ?)');

    $stmt->execute([$amount, $userId]);


    return (int) $this->db->lastInsertId();
  }

  public function find(int $invoiceId): array
  {
    $stmt = $this->db->prepare(
      'SELECT invoices.invoice_id AS invoice_id, amount, user_id, full_name
        FROM invoices
        INNER JOIN users ON user_id = users.id
        WHERE userEmail LIKE ?'
    );

    $stmt->execute([$invoiceId]);
    $invoice = $stmt->fetch();
    return $invoice ? $invoice : null;
  }
}
