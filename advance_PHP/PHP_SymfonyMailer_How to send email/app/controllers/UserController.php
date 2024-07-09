<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Attributes\Get;
use App\Controllers\Attributes\Post;
use App\Views\View;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class UserController
{
  #[Get('/users/create')]

  public function create(): View
  {

    return View::make('Register');
  }

  #[Post('/users')]
  public function register()
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $firstname = explode(' ', $name)[0];

    $text = <<<Body
    Hello $firstname,

    Thank you for signing up
    Body;

    $html = <<<HTMLBody
    <h1 style="text-align: center; color: blue">Welcome</h1>
    Hello $firstname,
    <br /><br />

    Thank you for signing up

    HTMLBody;

    $email = (new Email())->from('support@example.com')->to($email)->subject('Welcome')->text($text)->html($html);

    $dsn = 'smtp://mailhog:1025';

    $transport = Transport::fromDsn($dsn);

    $mailer = new Mailer($transport);

    $mailer->send($email);
  }
}
