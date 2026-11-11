<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Facade;

use RuntimeException;

final class OrderFacade
{
    private Inventory $inventory;
    private PaymentGateway $payment;
    private Shipping $shipping;

    public function __construct(Inventory $inventory, PaymentGateway $payment, Shipping $shipping)
    {
        $this->inventory = $inventory;
        $this->payment = $payment;
        $this->shipping = $shipping;
    }

    public function placeOrder(Order $order): void
    {
        if (!$this->inventory->has($order->sku, $order->quantity)) {
            throw new RuntimeException('Out of stock');
        }

        $this->inventory->reserve($order->sku, $order->quantity);
        $this->payment->charge($order->customer, $order->total());
        $this->shipping->schedule($order->sku, $order->quantity, $order->address);
    }
}
