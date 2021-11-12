<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

interface MusicalInstrumentStrategy
{
    public function build(): MusicalInstrument;
}