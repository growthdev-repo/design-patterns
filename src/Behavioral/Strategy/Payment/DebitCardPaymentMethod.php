<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

class DebitCardPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.00;  // 0%

    public function pay(float $amount): void
    {
        $amount - ($amount * self::DISCOUNT_PERCENT);

        printf('Paid %s with debit card', $amount);
    }
}