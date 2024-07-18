<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Attributes\Get;

class CurlController
{

  #[Get('/curl')]
  public function index()
  {
    $handle = curl_init();
    $apiKey = $_ENV['EMAILABLE_API_KEY'];
    $email = 'culasdaryll99@gmail.com';

    $params = [
      'api_key' => $apiKey,
      'email' => $email

    ];

    $url = 'https://api.emailable.com/v1/verify?' . http_build_query($params);

    // set options
    curl_setopt($handle, CURLOPT_URL, $url);

    // set return transfer
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);


    // execute
    curl_exec($handle);

    // get content
    $content = curl_exec($handle);

    // check if content is false
    if ($content !== false) {
      $data = json_decode($content, true);

      echo '<pre>';
      print_r($data);
    }
  }
}
