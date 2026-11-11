<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\State;

final class Order
{
    private OrderState $state;

    public function __construct()
    {
        $this->state = new PendingState();
    }

    public function changeState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function status(): string
    {
        return $this->state->name();
    }

    public function pay(): void
    {
        $this->state->pay($this);
    }

    public function ship(): void
    {
        $this->state->ship($this);
    }

    public function cancel(): void
    {
        $this->state->cancel($this);
    }
}
