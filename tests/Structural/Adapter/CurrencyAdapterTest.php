<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Adapter;

use Growthdev\DesignPatterns\Structural\Adapter\CurrencyConverterAdapter;
use Growthdev\DesignPatterns\Structural\Adapter\CurrencyToDollarConverter;
use Growthdev\DesignPatterns\Structural\Adapter\CurrencyToEuroConverter;
use PHPUnit\Framework\TestCase;

final class CurrencyAdapterTest extends TestCase
{
    public function testCurrencyConverterToEuro(): void
    {
        $currencyConverter = new CurrencyConverterAdapter(new CurrencyToEuroConverter);
        $this->assertEquals(6.35, $currencyConverter->convert(1.0));
    }

    public function testCurrencyConverterToDollar(): void
    {
        $currencyConverter = new CurrencyConverterAdapter(new CurrencyToDollarConverter);
        $this->assertEquals(5.61, $currencyConverter->convert(1.0));
    }
}