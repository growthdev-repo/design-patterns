<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

class Airbus extends Airplane
{
    public function sendMessage(string $message): void
    {
        $this->airTrafficControl->notifyAirplane($this, $message);
    }

    public function receiveMessage(string $message): void
    {
        $this->message = sprintf("Airbus received message: %s", $message);
    }
}