<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

class Cessna extends Airplane
{
    public function sendMessage(string $message): void
    {
        parent::$airTrafficControl->notifyAirplane($this, $message);
    }

    public function receiveMessage(string $message): void
    {
        printf('Cessna received message: %s', $message);
    }
}