<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Router;
use PHPUnit\Framework\TestCase;


class RouterTest extends TestCase
{
  /** @test */
  public function it_registerers_a_route(): void
  {
    //given that we have a router object
    $router = new Router();

    // when we call a register method
    $router->register('get', '/Users', ['Users', 'index']);

    $expected = [
      'get' => [
        '/users' => ['Users', 'index']

      ]
    ];


    // then we assert route was registered
    $this->assertEquals($expected, $router->routes());
  }
}
