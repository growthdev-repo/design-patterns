<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Product;

class AcousticGuitar extends MusicalInstrument
{
    public function make(): void
    {
        printf("Made a %s acoustic guitar \n\n", $this->getBrand());
    }
}
