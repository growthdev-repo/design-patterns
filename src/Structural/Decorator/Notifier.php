<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Decorator;

interface Notifier
{
    public function send(string $message): void;
}
