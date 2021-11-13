<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

final class PaymentProcessor
{
    private PaymentMethodStrategy $paymentMethod;
    private float $amount;

    public function __construct(PaymentMethodStrategy $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): void
    {
        $this->amount = $this->paymentMethod->pay($amount);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
