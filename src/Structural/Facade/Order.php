<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Facade;

final class Order
{
    public readonly string $sku;
    public readonly int $quantity;
    public readonly float $unitPrice;
    public readonly string $customer;
    public readonly string $address;

    public function __construct(string $sku, int $quantity, float $unitPrice, string $customer, string $address)
    {
        $this->sku = $sku;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->customer = $customer;
        $this->address = $address;
    }

    public function total(): float
    {
        return $this->quantity * $this->unitPrice;
    }
}
