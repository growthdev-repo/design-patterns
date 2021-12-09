<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite;

final class Product extends CatalogComponent
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function display(): void
    {
        printf("Product: %s R$ %.2f\n", $this->name, $this->price);
    }
}
