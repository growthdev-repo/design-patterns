<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Bridge;

final class PaymentFailedNotification extends Notification
{
    private string $orderId;

    public function __construct(Channel $channel, string $orderId)
    {
        parent::__construct($channel);

        $this->orderId = $orderId;
    }

    public function notify(string $recipient): void
    {
        $this->channel->send($recipient, sprintf('Payment for order %s failed', $this->orderId));
    }
}
