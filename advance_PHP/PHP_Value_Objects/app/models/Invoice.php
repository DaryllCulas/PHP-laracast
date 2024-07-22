<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int  $invoice_number
 * @property float $amount
 * @property InvoiceStatus $status
 * @property Carbon $created_at
 */

class Invoice extends Model
{
  protected $table = 'Invoice';

  const UPDATED_AT = null;

  protected $casts = [
    'created_at' => 'datetime',
    'status' => InvoiceStatus::class

  ];

  public function items(): HasMany
  {
    return $this->hasMany(InvoiceItem::class);
  }
}