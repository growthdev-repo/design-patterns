<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Bridge;

final class EmailChannel implements Channel
{
    public function send(string $recipient, string $text): void
    {
        printf("Email to %s: %s\n", $recipient, $text);
    }
}
