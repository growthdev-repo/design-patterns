<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Decorator;

final class SmsNotifier extends NotifierDecorator
{
    private readonly string $phone;

    public function __construct(Notifier $notifier, string $phone)
    {
        parent::__construct($notifier);
        $this->phone = $phone;
    }

    public function send(string $message): void
    {
        parent::send($message);

        printf("SMS to %s: %s\n", $this->phone, $message);
    }
}
