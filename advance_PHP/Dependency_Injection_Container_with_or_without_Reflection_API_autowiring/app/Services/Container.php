<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\Container\NotFoundException;
use Psr\Container\ContainerInterface;


class Container implements ContainerInterface
{

  /**
   * @inheritDoc
   */

  private array $entries = [];
  public function get(string $id)
  {
    if (!$this->has($id)) {
      throw new NotFoundException('Class "' . $id . '" has no binding');
    }
    $entry = $this->entries[$id];
    return $entry($this);
  }

  /**
   * @inheritDoc
   */
  public function has(string $id): bool
  {
    return isset($this->entries[$id]);
  }


  public function set(string $id, $concrete)
  {
    $this->entries[$id] = $concrete;
  }
}
