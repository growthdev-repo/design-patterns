<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsibility;

final class Sale
{
    public readonly float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }
}