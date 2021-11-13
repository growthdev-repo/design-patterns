<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

final class PaymentProcessorWithoutStrategy
{
    const PAYMENT_TYPE_CREDIT_CARD = 'credit_card';
    const PAYMENT_TYPE_DEBIT_CARD = 'debit_card';
    const PAYMENT_TYPE_BY_CASH = 'by_cash';

    private string $paymentMethod;
    private float $amount;

    public function __construct(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): void
    {
        switch ($this->paymentMethod) {
            case self::PAYMENT_TYPE_CREDIT_CARD:
                $creditCard = new CreditCardPaymentMethod();
                $this->amount = $creditCard->pay($amount);
                break;
            case self::PAYMENT_TYPE_DEBIT_CARD:
                $debitCard = new DebitCardPaymentMethod();
                $this->amount = $debitCard->pay($amount);
                break;
            case self::PAYMENT_TYPE_BY_CASH:
                $byCash = new ByCashPaymentMethod();
                $this->amount = $byCash->pay($amount);
                break;
            default:
                throw new \InvalidArgumentException('Invalid payment method');
        }
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
