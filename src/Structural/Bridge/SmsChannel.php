<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Bridge;

final class SmsChannel implements Channel
{
    public function send(string $recipient, string $text): void
    {
        printf("SMS to %s: %s\n", $recipient, $text);
    }
}
