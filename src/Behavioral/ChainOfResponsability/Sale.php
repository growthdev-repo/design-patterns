<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

final class Sale
{
    public readonly float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }
}