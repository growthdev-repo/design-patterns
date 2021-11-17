<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\Piano;

abstract class MusicalInstrumentFactory
{
    abstract public function buildGuitar(string $brand): Guitar;

    abstract public function buildPiano(string $brand): Piano;
}
