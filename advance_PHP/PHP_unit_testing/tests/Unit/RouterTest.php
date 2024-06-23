<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Controllers\Router;
use App\Exceptions\RouteNotFoundException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class RouterTest extends TestCase
{

  private Router $router;
  protected function setUp(): void
  {
    parent::setUp();
    $this->router = new Router();
  }


  #[Test]
  public function it_registers_a_route(): void
  {
    //given that we have a router object


    // when we call a register method
    $this->router->register('get', '/Users', ['Users', 'index']);

    $expected = [
      'get' => [
        '/Users' => ['Users', 'index']

      ]
    ];
    // then we assert route was registered
    $this->assertEquals($expected, $this->router->routes());
  }


  #[Test]
  public function it_registers_a_get_route(): void
  {



    $this->router->get('/Users', ['Users', 'index']);

    $expected = [
      'get' => [
        '/Users' => ['Users', 'index']

      ]
    ];

    $this->assertEquals($expected, $this->router->routes());
  }

  #[Test]
  public function it_registers_a_post_route(): void
  {



    $this->router->post('/Users', ['Users', 'store']);

    $expected = [
      'post' => [
        '/Users' => ['Users', 'store']

      ]
    ];
    $this->assertEquals($expected, $this->router->routes());
  }

  #[Test]
  public function there_are_no_routes_when_router_is_created(): void
  {
    $this->router = new Router();

    $this->assertEmpty($this->router->routes());
  }

  #[Test]
  #[DataProvider('routeNotFoundCases')]
  public function it_throws_route_not_found_exception(
    string $requestUri,
    string $requestMethod
  ): void {
    $users = new class()
    {
      public function delete(): bool
      {
        return true;
      }
    };


    $this->router->post('/users', [$users::class, 'store']);
    $this->router->get('/users', ['Users', 'index']);

    $this->expectException(RouteNotFoundException::class);
    $this->router->resolve($requestUri, $requestMethod);
  }


  public function routeNotFoundCases(): array
  {
    return [
      ['/users', 'put'],
      ['/invoices', 'post'],
      ['/users', 'get'],
      ['/users', 'post'],
    ];
  }
}