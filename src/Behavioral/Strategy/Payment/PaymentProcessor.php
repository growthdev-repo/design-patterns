<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

final class PaymentProcessor
{
    private PaymentMethodStrategy $paymentMethod;

    public function __construct(PaymentMethodStrategy $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): void
    {
        $this->paymentMethod->pay($amount);
    }
}
