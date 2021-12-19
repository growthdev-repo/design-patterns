<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

abstract class ApproveHandler implements SaleHandler
{
    private ApproveHandler $nextHandler;

    public final function setNext(ApproveHandler $nextHandler): ApproveHandler
    {
        $this->nextHandler = $nextHandler;
        return $nextHandler;
    }

    public function processSale(Sale $sale): void
    {
        if ($this->nextHandler) {
            $this->nextHandler->processSale($sale);
        }
    }
}
