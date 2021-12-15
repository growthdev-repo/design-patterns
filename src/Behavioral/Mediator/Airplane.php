<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

abstract class Airplane
{
    protected AirTrafficControl $airTrafficControl;
    protected string $message;

    public function __construct(AirTrafficControl $airTrafficControl)
    {
        $this->airTrafficControl = $airTrafficControl;
    }

    abstract public function sendMessage(string $message): void;

    abstract public function receiveMessage(string $message): void;

    public function getMessage(): string
    {
        return $this->message;
    }
}