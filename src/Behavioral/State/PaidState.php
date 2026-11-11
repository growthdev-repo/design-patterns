<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

use LogicException;

final class PaidState implements OrderState
{
    public function name(): string
    {
        return 'paid';
    }

    public function pay(Order $order): void
    {
        throw new LogicException('Order already paid');
    }

    public function ship(Order $order): void
    {
        $order->changeState(new ShippedState());
    }

    public function cancel(Order $order): void
    {
        $order->changeState(new CancelledState());
    }
}
