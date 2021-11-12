<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory;

use Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory\MusicalInstrumentStrategy;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Factory\AcousticGuitarFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\AcousticGuitar;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class AcousticGuitarStrategy implements MusicalInstrumentStrategy
{
    private string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function build(): MusicalInstrument
    {
        return (new AcousticGuitarFactory())
            ->createMusicalInstrument($this->brand);
    }
}
