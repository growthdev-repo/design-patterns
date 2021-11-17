<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\AbstractFactory\Products\Guitar;

class NormalGuitar extends Guitar
{
    public function getModel(): string
    {
        return sprintf('%s Normal Guitar', parent::getBrand());
    }
}
