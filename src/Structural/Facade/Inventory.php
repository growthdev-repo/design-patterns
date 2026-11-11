<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Facade;

final class Inventory
{
    /** @var array<string, int> */
    private array $stock;

    /** @param array<string, int> $stock */
    public function __construct(array $stock)
    {
        $this->stock = $stock;
    }

    public function has(string $sku, int $quantity): bool
    {
        return ($this->stock[$sku] ?? 0) >= $quantity;
    }

    public function reserve(string $sku, int $quantity): void
    {
        $this->stock[$sku] -= $quantity;

        printf("Reserved %d x %s\n", $quantity, $sku);
    }
}
