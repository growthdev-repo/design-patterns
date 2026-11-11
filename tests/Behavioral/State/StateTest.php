<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\State;

use Growthdev\DesignPatterns\Behavioral\State\Order;
use LogicException;
use PHPUnit\Framework\TestCase;

final class StateTest extends TestCase
{
    public function testExpectOrderToGoFromPendingToShipped(): void
    {
        $order = new Order();
        $this->assertSame('pending', $order->status());

        $order->pay();
        $this->assertSame('paid', $order->status());

        $order->ship();
        $this->assertSame('shipped', $order->status());
    }

    public function testExpectPendingOrderNotToBeShipped(): void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Order must be paid before shipping');

        $order = new Order();
        $order->ship();
    }

    public function testExpectPaidOrderToBeCancelled(): void
    {
        $order = new Order();
        $order->pay();
        $order->cancel();

        $this->assertSame('cancelled', $order->status());
    }

    public function testExpectShippedOrderNotToBeCancelled(): void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Shipped order cannot be cancelled');

        $order = new Order();
        $order->pay();
        $order->ship();
        $order->cancel();
    }

    public function testExpectCancelledOrderToRejectPayment(): void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Order is cancelled');

        $order = new Order();
        $order->cancel();
        $order->pay();
    }
}
