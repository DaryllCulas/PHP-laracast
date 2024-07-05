<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;
use Generator;

class Ticket extends Model
{
  public function all(): Generator
  {
    $stmt = $this->db->query(
      'SELECT id, title, description, created_at, updated_at
       FROM Ticket'
    );

    // return $stmt->fetchAll();

    foreach ($stmt as $tickets) {
      yield $tickets;
    }
  }
}
