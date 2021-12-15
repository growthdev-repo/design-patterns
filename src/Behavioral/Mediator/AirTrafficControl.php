<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Mediator;

interface AirTrafficControl
{
    public function addAirplane(Airplane $airplane): void;

    public function notifyAirplane(Airplane $airplane, string $message): void;
}