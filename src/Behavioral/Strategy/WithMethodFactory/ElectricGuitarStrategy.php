<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory;

use Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory\MusicalInstrumentStrategy;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Factory\ElectricGuitarFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class ElectricGuitarStrategy implements MusicalInstrumentStrategy
{
    private string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function build(): MusicalInstrument
    {
        return (new ElectricGuitarFactory())
            ->createMusicalInstrument($this->brand);
    }
}
