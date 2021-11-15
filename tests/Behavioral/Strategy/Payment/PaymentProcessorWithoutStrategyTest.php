<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Strategy\Payment;

use Growthdev\DesignPatterns\Behavioral\Strategy\Payment\PaymentProcessorWithoutStrategy;
use PHPUnit\Framework\TestCase;

final class PaymentProcessorWithoutStrategyTest extends TestCase
{
    public function testCanProcessPaymentWithCashPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessorWithoutStrategy(
            PaymentProcessorWithoutStrategy::PAYMENT_TYPE_CASH
        );
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(90.00, $paymentProcessor->getAmount());
    }

    public function testCanProcessPaymentWithDebitCardPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessorWithoutStrategy(
            PaymentProcessorWithoutStrategy::PAYMENT_TYPE_DEBIT_CARD
        );
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(95.00, $paymentProcessor->getAmount());
    }

    public function testCanProcessPaymentWithCreditCardPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessorWithoutStrategy(
            PaymentProcessorWithoutStrategy::PAYMENT_TYPE_CREDIT_CARD
        );
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(100.00, $paymentProcessor->getAmount());
    }
}
