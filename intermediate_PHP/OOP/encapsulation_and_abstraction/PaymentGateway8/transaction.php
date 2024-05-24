<?php


declare(strict_types=1);

namespace PaymentGateway8;

use DateTime;

class Transaction8
{

  private float $amount;
  private bool $isEmailSent;
  private string $isEmailSentToString;

  public function __construct(float $amount, string $isEmailSentToString)
  {
    $this->amount = $amount;
    $this->isEmailSent = true;
    $this->isEmailSentToString = $isEmailSentToString;
  }

  public function process()
  {
    echo "Processing $$this->amount: Transaction completed";
    $this->generateReceipt();
    echo PHP_EOL;
    $this->sendEmail();
  }

  private function generateReceipt()
  {
    $datetime = new DateTime("2023-01-01 11:00:00", new \DateTimeZone("UTC"));

    return "\nDate:" . $datetime->format("Y-m-d H:i:s") . "\nAmount:" . $this->amount . "\n";
  }
  private function sendEmail()
  {

    return "is email sent? =" . $this->isEmailSentToString;
  }
}
