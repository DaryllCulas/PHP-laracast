<?php

declare(strict_types=1);

namespace App\Services\Emailable;

use GuzzleHttp\Client;

class EmailValidationService
{
  private string $baseUrl = 'https://api.emailable.com/v1/';

  public function __construct(private string $apiKey)
  {
  }

  public function verify(string $email): array
  {
    $client = new Client(
      [
        'base_uri' => $this->baseUrl,
        'timeout' => 5
      ]
    );


    $params = [
      'api_key' => $this->apiKey,
      'email' => $email

    ];

    $response = $client->get('verify', ['query' => $params]);

    return json_decode($response->getBody()->getContents(), true);
  }
}