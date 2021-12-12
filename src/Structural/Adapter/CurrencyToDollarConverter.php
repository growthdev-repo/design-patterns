<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Adapter;

final class CurrencyToDollarConverter implements CurrencyConverter
{
    public function convert(float $amount): float
    {
        return $amount * 5.61; // 1$ = R$ 5.61
    }
}