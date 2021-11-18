<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Piano;

class ElectricPiano extends Piano
{
    public function getModel(): string
    {
        return sprintf('%s Electric Piano', parent::getBrand());
    }
}