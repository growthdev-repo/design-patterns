<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Interpreter;

use Growthdev\DesignPatterns\Behavioral\Interpreter\AndExpression;
use Growthdev\DesignPatterns\Behavioral\Interpreter\Context;
use Growthdev\DesignPatterns\Behavioral\Interpreter\EqualsExpression;
use Growthdev\DesignPatterns\Behavioral\Interpreter\GreaterThanExpression;
use Growthdev\DesignPatterns\Behavioral\Interpreter\NotExpression;
use Growthdev\DesignPatterns\Behavioral\Interpreter\OrExpression;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class InterpreterTest extends TestCase
{
    public function testExpectTerminalExpressionsToReadTheContext(): void
    {
        $context = new Context(['total' => 250.0, 'state' => 'SP']);

        $this->assertTrue((new GreaterThanExpression('total', 200.0))->interpret($context));
        $this->assertFalse((new GreaterThanExpression('total', 300.0))->interpret($context));
        $this->assertTrue((new EqualsExpression('state', 'SP'))->interpret($context));
        $this->assertFalse((new EqualsExpression('state', 'RJ'))->interpret($context));
    }

    public function testExpectNotToInvertAnExpression(): void
    {
        $context = new Context(['state' => 'SP']);
        $notFromRio = new NotExpression(new EqualsExpression('state', 'RJ'));

        $this->assertTrue($notFromRio->interpret($context));
    }

    public function testExpectFreeShippingRuleToBeInterpreted(): void
    {
        // (total > 200 AND state = SP) OR customer = vip
        $freeShipping = new OrExpression(
            new AndExpression(
                new GreaterThanExpression('total', 200.0),
                new EqualsExpression('state', 'SP')
            ),
            new EqualsExpression('customer', 'vip')
        );

        $bigOrderFromSaoPaulo = new Context(['total' => 250.0, 'state' => 'SP', 'customer' => 'regular']);
        $bigOrderFromRio = new Context(['total' => 250.0, 'state' => 'RJ', 'customer' => 'regular']);
        $smallOrderFromVip = new Context(['total' => 50.0, 'state' => 'RJ', 'customer' => 'vip']);

        $this->assertTrue($freeShipping->interpret($bigOrderFromSaoPaulo));
        $this->assertFalse($freeShipping->interpret($bigOrderFromRio));
        $this->assertTrue($freeShipping->interpret($smallOrderFromVip));
    }

    public function testExpectUnknownFieldToFail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown field: coupon');

        (new EqualsExpression('coupon', 'FRETE10'))->interpret(new Context(['total' => 250.0]));
    }
}
