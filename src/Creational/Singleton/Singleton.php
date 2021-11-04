<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

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

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    private function __sleep()
    {
    }
}