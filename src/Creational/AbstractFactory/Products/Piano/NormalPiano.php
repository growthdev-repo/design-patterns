<?php

declare(strict_types=1);

namespace Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano;

class NormalPiano extends Piano
{
    public function getModel(): string
    {
        return sprintf('%s Normal Piano', parent::getBrand());
    }
}
