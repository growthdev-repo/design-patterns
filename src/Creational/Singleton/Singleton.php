<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Singleton;

use LogicException;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public function __sleep()
    {
        throw new LogicException('Cannot serialize a singleton.');
    }
    
    public function __wakeup(): void
    {
        throw new LogicException('Cannot unserialize a singleton.');
    }
}
