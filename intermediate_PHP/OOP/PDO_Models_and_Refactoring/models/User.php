<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class User extends Model
{



  public function create(string $userEmail, string $full_name, $isActive = true): int
  {
    $stmt = $this->db->prepare('INSERT INTO users (userEmail, full_name, is_active, created_at) VALUES (?, ?, 1, NOW())');

    $stmt->execute([$userEmail, $full_name, $isActive]);


    return (int) $this->db->lastInsertId();
  }
}
