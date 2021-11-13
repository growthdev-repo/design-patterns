<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

interface PaymentMethodStrategy
{
    public function pay(float $amount): void;
}