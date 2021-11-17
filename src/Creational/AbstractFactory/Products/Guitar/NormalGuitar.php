<?php

declare(strict_types=1);

namespace Growthdev\DesignPattern\Creational\AbstractFactory\Products\Guitar;

class NormalGuitar extends Guitar
{
    public function getModel(): string
    {
        return sprintf('%s Normal Guitar', parent::getBrand());
    }
}
