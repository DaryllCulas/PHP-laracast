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
    $url = 'https://example.com';

    // set options
    curl_setopt($handle, CURLOPT_URL, $url);

    // set return transfer
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);


    // execute
    curl_exec($handle);

    // get content
    $content = curl_exec($handle);

    var_dump(curl_getinfo($handle));

    // echo strlen($content);
  }
}
