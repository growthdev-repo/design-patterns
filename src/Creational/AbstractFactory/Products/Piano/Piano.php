<?php

declare(strict_types=1);

namespace Growthdev\DesignPattern\Creational\AbstractFactory\Products\Piano;

abstract class Piano
{
    private string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
    
    abstract public function getModel(): string;
}