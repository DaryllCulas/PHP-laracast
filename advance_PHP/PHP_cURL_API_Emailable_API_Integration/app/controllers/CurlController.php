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
    $url = 'https://api.emailable.com/v1/verify?email=culasdaryll99@gmail.com&api_key=test_9161e57f43a0ba1719de';

    // set options
    curl_setopt($handle, CURLOPT_URL, $url);

    // set return transfer
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);


    // execute
    curl_exec($handle);

    // get content
    $content = curl_exec($handle);


    if ($content !== false) {
      $data = json_decode($content, true);

      echo '<pre>';
      print_r($data);
    }
  }
}
