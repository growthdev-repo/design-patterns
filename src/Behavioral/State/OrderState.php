<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

interface OrderState
{
    public function name(): string;

    public function pay(Order $order): void;

    public function ship(Order $order): void;

    public function cancel(Order $order): void;
}
