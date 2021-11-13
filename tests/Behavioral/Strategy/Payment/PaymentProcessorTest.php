<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Strategy\Payment;

use Growthdev\DesignPatterns\Behavioral\Strategy\Payment\CashPaymentMethod;
use Growthdev\DesignPatterns\Behavioral\Strategy\Payment\CreditCardPaymentMethod;
use Growthdev\DesignPatterns\Behavioral\Strategy\Payment\DebitCardPaymentMethod;
use Growthdev\DesignPatterns\Behavioral\Strategy\Payment\PaymentProcessor;
use PHPUnit\Framework\TestCase;

final class PaymentProcessorTest extends TestCase
{
    public function testCanProcessPaymentWithCashPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessor(new CashPaymentMethod());
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(90.00, $paymentProcessor->getAmount());
    }

    public function testCanProcessPaymentWithDebitCardPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessor(new DebitCardPaymentMethod());
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(95.00, $paymentProcessor->getAmount());
    }

    public function testCanProcessPaymentWithCreditCardPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessor(new CreditCardPaymentMethod());
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(100.00, $paymentProcessor->getAmount());
    }

}