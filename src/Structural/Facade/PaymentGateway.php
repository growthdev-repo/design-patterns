<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Facade;

final class PaymentGateway
{
    public function charge(string $customer, float $amount): void
    {
        printf("Charged %.2f to %s\n", $amount, $customer);
    }
}
