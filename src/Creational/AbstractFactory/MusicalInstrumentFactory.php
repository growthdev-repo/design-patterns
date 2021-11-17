<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano\Piano;

abstract class MusicalInstrumentFactory
{
    abstract public function createGuitar(string $brand): Guitar;

    abstract public function createPiano(string $brand): Piano;
}
