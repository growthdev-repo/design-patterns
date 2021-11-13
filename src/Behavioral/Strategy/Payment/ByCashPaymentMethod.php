<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

class ByCashPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.10; // 10%

    public function pay(float $amount): void
    {
        $amount - ($amount * self::DISCOUNT_PERCENT);

        printf('Paid by cash: %s', $amount);
    }
}
