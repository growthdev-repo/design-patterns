<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\Piano;

abstract class MusicalInstrumentFactory
{
    abstract public function createGuitar(string $brand): Guitar;

    abstract public function createPiano(string $brand): Piano;
}
