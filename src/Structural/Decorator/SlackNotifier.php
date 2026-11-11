<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Decorator;

final class SlackNotifier extends NotifierDecorator
{
    private readonly string $channel;

    public function __construct(Notifier $notifier, string $channel)
    {
        parent::__construct($notifier);
        $this->channel = $channel;
    }

    public function send(string $message): void
    {
        parent::send($message);

        printf("Slack to %s: %s\n", $this->channel, $message);
    }
}
