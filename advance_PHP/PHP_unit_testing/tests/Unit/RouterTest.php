<?php

declare(strict_types=1);

namespace Tests\Unit;


use App\Controllers\Router;
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
}