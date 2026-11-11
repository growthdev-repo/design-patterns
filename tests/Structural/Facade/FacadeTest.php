<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Facade;

use Growthdev\DesignPatterns\Structural\Facade\Inventory;
use Growthdev\DesignPatterns\Structural\Facade\Order;
use Growthdev\DesignPatterns\Structural\Facade\OrderFacade;
use Growthdev\DesignPatterns\Structural\Facade\PaymentGateway;
use Growthdev\DesignPatterns\Structural\Facade\Shipping;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class FacadeTest extends TestCase
{
    public function testExpectFacadeToRunTheWholeCheckout(): void
    {
        $facade = new OrderFacade(new Inventory(['php-book' => 3]), new PaymentGateway(), new Shipping());
        $facade->placeOrder(new Order('php-book', 2, 59.90, 'dev@example.com', '100 Main Street'));

        $this->expectOutputString(
            "Reserved 2 x php-book\n"
            . "Charged 119.80 to dev@example.com\n"
            . "Shipping 2 x php-book to 100 Main Street\n"
        );
    }

    public function testExpectNothingToHappenWhenOutOfStock(): void
    {
        $facade = new OrderFacade(new Inventory(['php-book' => 1]), new PaymentGateway(), new Shipping());

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Out of stock');
        $this->expectOutputString('');

        $facade->placeOrder(new Order('php-book', 2, 59.90, 'dev@example.com', '100 Main Street'));
    }

    public function testExpectSubsystemToRemainAvailable(): void
    {
        $inventory = new Inventory(['php-book' => 3]);
        $facade = new OrderFacade($inventory, new PaymentGateway(), new Shipping());
        $facade->placeOrder(new Order('php-book', 2, 59.90, 'dev@example.com', '100 Main Street'));

        $this->assertTrue($inventory->has('php-book', 1));
        $this->assertFalse($inventory->has('php-book', 2));
        $this->expectOutputRegex('/^Reserved 2 x php-book/');
    }
}
