<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

use SplObjectStorage;

final class GRUAirTrafficControl implements AirTrafficControl
{
    private SplObjectStorage $airplane;

    public function __construct()
    {
        $this->airplane = new SplObjectStorage();
    }

    public function addAirplane(Airplane $airplane): void
    {
        $this->airplane->attach($airplane);
    }

    public function notifyAirplane(Airplane $airplaneReceiver, string $message): void
    {
        while ($this->airplane->valid()) {
            $airplane = $this->airplane->current();
            if ($airplane !== $airplaneReceiver) {
                $airplane->receiveMessage($message);
            }
            
            $this->airplane->next();
        }
    }
}