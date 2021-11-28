<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Observer;

final class Subscriber
{
    public function __construct(
        public readonly string $email
    ) {}
}