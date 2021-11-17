<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\ElectricGuitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\ElectricPiano;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\Piano;

class ElectricMusicalInstrumentFactory extends MusicalInstrumentFactory
{
    public function buildGuitar(string $brand): Guitar
    {
        return new ElectricGuitar($brand);
    }

    public function buildPiano(string $brand): Piano
    {
        return new ElectricPiano($brand);
    }
}
