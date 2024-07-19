<?php

declare(strict_types=1);

namespace App\Services\Emailable;

class EmailValidationService
{

  public function verify(string $email): array
  {
    $handle = curl_init();
    $apiKey = $_ENV['EMAILABLE_API_KEY'];


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
      return json_decode($content, true);
    }
    return [];
  }
}