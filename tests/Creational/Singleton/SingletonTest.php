<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Singleton;

use Growthdev\DesignPatterns\Creational\Singleton\Singleton;
use Error;
use LogicException;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
    public function testShouldBeTheSameInstanceForTwoObjets(): void
    {
        $firstInstance = Singleton::getInstance();
        $secondInstance = SingleTon::getInstance();

        $this->assertSame($firstInstance, $secondInstance);
    }

    public function testShouldThrowErrorWhenTryToCreateInstance(): void
    {
        $this->expectException(Error::class);

        $instance = new Singleton();
    }

    public function testShouldThrowErrorWhenTryToClone(): void
    {
        $this->expectException(Error::class);

        $instance = Singleton::getInstance();
        $clone = clone $instance;
    }

    public function testShouldThrowExceptionWhenTryToSerialize(): void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Cannot serialize a singleton.');

        $instance = Singleton::getInstance();
        $serialize = serialize($instance);
    }

    public function testShouldThrowExceptionWhenTryToUnserialize(): void
    {
        $this->expectException(LogicException::class);
        //$this->expectExceptionMessage('Cannot unserialize a singleton.');

        $instance = Singleton::getInstance();
        $serialize = serialize($instance);  // vai cair na exceção do serialize

        $unserialize = unserialize($serialize); // não vai chegar aqui
    }
}
