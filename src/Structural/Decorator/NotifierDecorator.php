<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Decorator;

abstract class NotifierDecorator implements Notifier
{
    private readonly Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send(string $message): void
    {
        $this->notifier->send($message);
    }
}
