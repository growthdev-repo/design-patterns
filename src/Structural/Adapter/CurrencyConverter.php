<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Adapter;

interface CurrencyConverter
{
    public function convert(float $amount): float;
}