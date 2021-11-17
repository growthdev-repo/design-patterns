<?php

declare(strict_types=1);

namespace Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano;

class ElectricPiano extends Piano
{
    public function getModel(): string
    {
        return sprintf('%s Electric Piano', parent::getBrand());
    }
}