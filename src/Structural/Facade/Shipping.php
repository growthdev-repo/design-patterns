<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Facade;

final class Shipping
{
    public function schedule(string $sku, int $quantity, string $address): void
    {
        printf("Shipping %d x %s to %s\n", $quantity, $sku, $address);
    }
}
