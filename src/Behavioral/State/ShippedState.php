<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

use LogicException;

final class ShippedState implements OrderState
{
    public function name(): string
    {
        return 'shipped';
    }

    public function pay(Order $order): void
    {
        throw new LogicException('Order already paid');
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Order already shipped');
    }

    public function cancel(Order $order): void
    {
        throw new LogicException('Shipped order cannot be cancelled');
    }
}
