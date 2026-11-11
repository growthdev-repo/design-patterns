<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Bridge;

abstract class Notification
{
    protected Channel $channel;

    public function __construct(Channel $channel)
    {
        $this->channel = $channel;
    }

    abstract public function notify(string $recipient): void;
}
