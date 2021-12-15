<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

use SplObjectStorage;

final class GRUAirTrafficControl implements AirTrafficControl
{
    private SplObjectStorage $airplane;

    public function addAirplane(Airplane $airplane): void
    {
        $this->airplane->attach($airplane);
    }

    public function notifyAirplane(Airplane $airplaneReceiver, string $message): void
    {
        foreach ($this->airplane as $airplane) {
            if ($airplaneReceiver !== $airplane) {
                $airplaneReceiver->receiveMessage($message);
            }
        }
    }
}