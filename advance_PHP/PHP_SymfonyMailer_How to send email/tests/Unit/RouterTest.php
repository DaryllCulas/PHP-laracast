<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Exceptions\RouteNotFoundException;
use App\Controllers\Router;
use App\Services\Container;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class RouterTest extends TestCase
{

  private Router $router;
  protected function setUp(): void
  {
    parent::setUp();
    $this->router = new Router(new Container());
  }


  #[Test]
  public function it_registers_a_route(): void
  {
    //given that we have a router object


    // when we call a register method
    $this->router->register('get', '/users', ['Users', 'index']);

    $expected = [
      'get' => [
        '/users' => ['Users', 'index']

      ]
    ];
    // then we assert route was registered
    $this->assertSame($expected, $this->router->routes());
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

    $this->assertSame($expected, $this->router->routes());
  }

  #[Test]
  public function it_registers_a_post_route(): void
  {



    $this->router->post('/users', ['Users', 'store']);

    $expected = [
      'post' => [
        '/users' => ['Users', 'store']

      ]
    ];
    $this->assertSame($expected, $this->router->routes());
  }

  #[Test]
  public function there_are_no_routes_when_router_is_created(): void
  {
    $this->router = new Router(new Container());

    $this->assertEmpty($this->router->routes());
  }



  // Failed: 4 test => 4 RouteNotFoundException invalids
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


  public static function routeNotFoundCases(): array
  {
    return [
      ['/users', 'put'],
      ['/invoices', 'post'],
      ['/users', 'get'],
      ['/users', 'post'],
    ];
  }


  #[Test]
  public function it_resolves_route_from_a_closure(): void
  {
    $this->router->get('/users', fn () => [1, 2, 3]);

    $this->assertSame(
      [1, 2, 3],
      $this->router->resolve('/users', 'get')
    );
  }

  #[Test]
  public function it_resolves_route(): void
  {
    $users = new class()
    {
      public function index(): array
      {
        return [1, 2, 3,];
      }
    };

    $this->router->get('/users', [$users::class, 'index']);

    $this->assertSame(
      [1, 2, 3],
      $this->router->resolve('/users', 'get')
    );
  }
}
