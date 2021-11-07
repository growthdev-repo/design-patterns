<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Product;

class ElectricGuitar extends MusicalInstrument
{
    public function make(): void
    {
        printf("Made a %s eletric guitar \n\n", $this->getBrand());
    }
}
