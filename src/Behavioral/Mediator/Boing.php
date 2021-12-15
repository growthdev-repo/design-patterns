<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

class Boing extends Airplane
{
    public function sendMessage(string $message): void
    {
        parent::$airTrafficControl->notifyAirplane($this, $message);
    }

    public function receiveMessage(string $message): void
    {
        printf('Boing received message: %s', $message);
    }
}