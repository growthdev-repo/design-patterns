<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class MusicalInstrumentFactory
{
    public function createMusicalInstrument(
        MusicalInstrumentStrategy $musicalInstrument
    ): MusicalInstrument {
        return $musicalInstrument->build();
    }
}



