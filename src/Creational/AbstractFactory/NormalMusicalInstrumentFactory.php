<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar\NormalGuitar;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano\NormalPiano;
use Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano\Piano;

class NormalMusicalInstrumentFactory extends MusicalInstrumentFactory
{
    public function createGuitar(string $brand): Guitar
    {
        return new NormalGuitar($brand);
    }

    public function createPiano(string $brand): Piano
    {
        return new NormalPiano($brand);
    }
}
