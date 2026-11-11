<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

use LogicException;

final class PendingState implements OrderState
{
    public function name(): string
    {
        return 'pending';
    }

    public function pay(Order $order): void
    {
        $order->changeState(new PaidState());
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Order must be paid before shipping');
    }

    public function cancel(Order $order): void
    {
        $order->changeState(new CancelledState());
    }
}
