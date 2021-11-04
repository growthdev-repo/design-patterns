<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
  public function testShoudBeTheSameInstanceForTwoObjets(): void
  {
    $firstInstance = Singleton::getInstance();
    $secondInstance = SingleTon::getInstance();

    $this->assertSame($firstInstance, $secondInstance);
  }

  public function testThrowErrorWhenTryToCreateInstance(): void
  {
    $this->expectException(Error::class);

    $instance = new Singleton();
  }

  public function testThrowExceptionWhenTryToClone(): void
  {
    $this->expectException(Error::class);

    $instance = Singleton::getInstance();
    $clone = clone $instance;
  }

  public function testThrowExceptionWhenTryToSerialize(): void
  {
    $this->expectException(Error::class);

    $instance = Singleton::getInstance();
    $serialize = serialize($instance);
  }
}