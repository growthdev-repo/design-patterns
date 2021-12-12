<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Adapter;

final class CurrencyToEuroConverter implements CurrencyConverter
{
    public function convert(float $amount): float
    {
        return $amount * 6.35; // 1 EUR = R$ 6.35
    }
}