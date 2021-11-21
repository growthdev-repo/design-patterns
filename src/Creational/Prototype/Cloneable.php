<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Prototype;

interface Cloneable
{
    public function clone(): self;
}
