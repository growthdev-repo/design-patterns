<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Factory;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\ElectricGuitar;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class ElectricGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new ElectricGuitar($brand);
    }
}
