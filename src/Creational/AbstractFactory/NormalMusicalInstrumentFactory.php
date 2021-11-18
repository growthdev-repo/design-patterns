<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\Guitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar\NormalGuitar;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\NormalPiano;
use Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano\Piano;

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
