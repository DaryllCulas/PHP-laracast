<?php

namespace App\MagicMethods;

class Invoice
{
  protected array $data = [];

  public function __get(string $name)
  {
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
    return null;
  }


  public function __set(string $name, $value): void
  {
    var_dump('isset');
    $this->data[$name] = $value;
  }



  public function __isset(string $name): bool
  {
    var_dump('unset');
    return array_key_exists($name, $this->data);
  }
  public function __unset(string $name): void
  {
    var_dump('unset');
    unset($this->data[$name]);
  }
}


class Invoice2
{
  private float $amountTobePaid = 343.34;
  private int $id = 23;
  private string $accountNumber = 'ff23343c3';

  protected function process2(float $amount, $description)
  {
    var_dump($amount, $description);
  }
  public function __call(string $name, array $arguments)
  {
    if (method_exists($this, $name)) {
      call_user_func_array([$this, $name], $arguments);
      $this->name($arguments);
    }
  }
  public static function __callStatic(string $name, array $arguments)
  {
    var_dump('statics', $name, $arguments);
  }

  public function __toString(): string
  {
    // return 1;

    return 'Hello world';
  }

  public function __invoke()
  {
    var_dump('Invoked');
  }

  public function __debugInfo(): ?array
  {
    return [
      'id' => $this->id,
      'amount_to_be_paid' => $this->amountTobePaid,
      'account_number' => '****' . substr($this->accountNumber, -4),
    ];
  }
}
