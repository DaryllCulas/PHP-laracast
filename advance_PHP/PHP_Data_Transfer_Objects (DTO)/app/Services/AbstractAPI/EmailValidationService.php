<?php

declare(strict_types=1);

namespace App\Services\AbstractAPI;


use App\Contracts\EmailValidationInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class EmailValidationService implements EmailValidationInterface
{
  private string $baseUrl = 'https://emailvalidation.abstractapi.com/v1/';

  public function __construct(private string $apiKey)
  {
  }

  public function verify(string $email): array
  {
    $stack = HandlerStack::create();
    $maxRetry = 3;

    $stack->push($this->getRetryMiddleware($maxRetry));


    $client = new Client(
      [
        'base_uri' => $this->baseUrl,
        'timeout' => 5,
        'handler' => $stack
      ]
    );

    $params = [
      'api_key' => $this->apiKey,
      'email' => $email

    ];

    $response = $client->get('', ['query' => $params]);

    return json_decode($response->getBody()->getContents(), true);
  }

  private function getRetryMiddleware(int $maxRetry)
  {
    return Middleware::retry(
      function (
        int $retries,
        RequestInterface $request,
        ?ResponseInterface $response = null,
        ?\RuntimeException $e = null
      ) use ($maxRetry) {
        if ($retries >= $maxRetry) {

          return false;
        }

        if ($response && in_array($response->getStatusCode(), [500, 502, 503, 504, 404])) {
          echo 'Retrying [' . $retries . ']' . '<br />' . 'status: ' . $response->getStatusCode() . PHP_EOL;

          return true;
        }

        if ($e instanceof ConnectException) {
          echo "Retrying [$retries], Connection Error" . PHP_EOL;

          return true;
        }

        return false;
      }
    );
  }
}