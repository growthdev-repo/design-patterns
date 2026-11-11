<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Bridge;

interface Channel
{
    public function send(string $recipient, string $text): void;
}
