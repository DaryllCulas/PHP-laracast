<?php

declare(strict_types=1);

namespace App\Enums;

enum InvoiceStatus: int
{
  case PENDING = 1;
  case PAID = 2;
  case VOID =  3;
  case FAILED = 4;


  public function toString(): string
  {
    return match ($this) {
      default => 'Pending',
      self::PAID => 'Paid',
      self::VOID => 'Void',
      self::FAILED => 'Failed',
    };
  }

  public function color(): string
  {
    return match ($this) {
      default => 'orange',
      self::PAID => 'green',
      self::VOID => 'gray',
      self::FAILED => 'red',
    };
  }
}
