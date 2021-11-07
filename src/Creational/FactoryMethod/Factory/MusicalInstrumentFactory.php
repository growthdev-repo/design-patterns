<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Factory;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

interface MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument;
}
