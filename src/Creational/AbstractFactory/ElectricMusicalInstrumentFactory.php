<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar\ElectricGuitar;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano\ElectricPiano;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano\Piano;

class ElectricMusicalInstrumentFactory extends MusicalInstrumentFactory
{
    public function createGuitar(string $brand): Guitar
    {
        return new ElectricGuitar($brand);
    }

    public function createPiano(string $brand): Piano
    {
        return new ElectricPiano($brand);
    }
}
