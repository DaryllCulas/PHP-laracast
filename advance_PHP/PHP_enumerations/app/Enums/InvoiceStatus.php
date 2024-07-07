<?php

declare(strict_types=1);

namespace App\Enums;

enum InvoiceStatus: int
{
  case PENDING = 1;
  case PAID = 2;
  case VOID =  3;
  case FAILED = 4;


  // public const PENDING = 1;
  // public const PAID = 2;
  // public const VOID =  3;
  // public const FAILED = 4;


  // public static function all(): array
  // {
  //   return [
  //     self::PENDING,
  //     self::PAID,
  //     self::VOID,
  //     self::FAILED

  //   ];
  // }
}
