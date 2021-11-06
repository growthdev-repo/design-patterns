<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Factory;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\AcousticGuitar;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class AcousticGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new AcousticGuitar($brand);
    }
}
