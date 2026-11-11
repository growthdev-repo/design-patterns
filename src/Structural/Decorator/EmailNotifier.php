<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Decorator;

final class EmailNotifier implements Notifier
{
    private readonly string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $message): void
    {
        printf("E-mail to %s: %s\n", $this->email, $message);
    }
}
