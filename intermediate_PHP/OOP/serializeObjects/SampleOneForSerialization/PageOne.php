<?php

namespace SerializeObjects;

use DateTime;

class Invoice
{
  public string $id;

  public function __construct(
    public float $amount,
    public string $description,
    public string $creditNumber,
  ) {
    $this->id = uniqId('Invoice');
  }


  public function __serialize(): array
  {
    return [
      'id'  => $this->id,
      'amount' => $this->amount,
      'description' => $this->description,
      'creditNumber' => base64_encode($this->creditNumber),
      'Date' => (new DateTime())->format('Y-m-d H:i:s'),
    ];
  }

  public function __unserialize(array $data): void
  {
    $this->id = $data['id'];
    $this->amount = $data['amount'];
    $this->description = $data['description'];
    $this->creditNumber = base64_decode($data['creditNumber']);
  }
}
