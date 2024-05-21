<?php



declare(strict_types=1);

namespace PaymentGateway\Transactionv3;

class Transaction3
{
  public const STATUS_PAID = 'paid';
  public const STATUS_PENDING = 'pending';
  public const STATUS_DECLINED = 'decline';

  public const STATUS_UNPAID = 'unpaid';


  public function __construct()
  {
  }
}
