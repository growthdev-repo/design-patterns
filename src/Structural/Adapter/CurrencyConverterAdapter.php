<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Adapter;

final class CurrencyConverterAdapter
{
    private CurrencyConverter $currencyConverter;

    public function __construct(CurrencyConverter $currencyConverter)
    {
        $this->currencyConverter = $currencyConverter;
    }

    public function convert(float $amount): float
    {
        return $this->currencyConverter->convert($amount);
    }
}