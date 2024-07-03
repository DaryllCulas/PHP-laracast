<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\Services\InvoiceService;
use App\Views\View;



class HomeController
{
  public function index(): View
  {
    App::$container->get(InvoiceService::class)->process([], 25);


    $db = App::db();
    var_dump($db);

    $userEmail = 'RobinArcheologist@gmail.com';
    $full_name = 'Robin Chan';
    $amount = 25;

    $userModel = new User();
    $invoiceModel = new Invoice();

    $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
      [
        'userEmail' => $userEmail,
        'full_name' => $full_name,
      ],
      [
        'amount' => $amount,
      ]
    );

    return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
  }

  public function upload()
  {
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';


    $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
    move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

    echo '<pre>';
    var_dump(pathinfo($filePath));
    echo '</pre>';
  }
}
