<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use App\Model;


class Invoice extends Model
{


  public function all(InvoiceStatus $status): array
  {
    return $this->db->createQueryBuilder()->select('id', 'invoiceNumber', 'amount', 'status')
      ->from('Invoices_Statuses')
      ->where('status = ?')
      ->setParameter(0, $status->value)
      ->fetchAllAssociative();
  }
}
