<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Product;

interface MusicalInstrumentProduct
{
    public function make(): void;
}
