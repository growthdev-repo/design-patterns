<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod\Product;

abstract class MusicalInstrument implements MusicalInstrumentProduct
{
    private string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    protected function getBrand(): string
    {
        return $this->brand;
    }
}
