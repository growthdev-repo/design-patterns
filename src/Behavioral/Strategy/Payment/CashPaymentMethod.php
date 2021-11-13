<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

class CashPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.10; // 10%

    public function pay(float $amount): float
    {
        return $amount - ($amount * self::DISCOUNT_PERCENT);
    }
}
