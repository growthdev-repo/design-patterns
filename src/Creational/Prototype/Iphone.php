<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Prototype;

final class Iphone extends Smartphone
{
    public function clone(): Cloneable
    {
        return clone $this;
    }
}
