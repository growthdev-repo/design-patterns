<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

use LogicException;

final class CancelledState implements OrderState
{
    public function name(): string
    {
        return 'cancelled';
    }

    public function pay(Order $order): void
    {
        throw new LogicException('Order is cancelled');
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Order is cancelled');
    }

    public function cancel(Order $order): void
    {
        throw new LogicException('Order is cancelled');
    }
}
