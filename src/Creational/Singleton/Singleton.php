<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Singleton;

use LogicException;

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }
    
    public function __sleep(): array
    {
        throw new LogicException('Cannot serialize a singleton.');
        return [];
    }
    
    public function __wakeup(): void
    {
        throw new LogicException('Cannot unserialize a singleton.');
    }
}
