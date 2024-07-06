<?php


namespace App\Views;


use App\Models\Ticket;
use Generator;

class GeneratorExample
{

  public function __construct(private Ticket $ticketModel)
  {
  }

  public function index()
  {
    foreach ($this->ticketModel->all() as $tickets) {
      echo $tickets['id'] . ': ' . substr($tickets['title'], 0, 10) . ' - ' . substr($tickets['description'], 0, 10) . '<br>';
    }

    // echo '<pre>';

    // print_r($this->ticketModel->all());
  }
}
