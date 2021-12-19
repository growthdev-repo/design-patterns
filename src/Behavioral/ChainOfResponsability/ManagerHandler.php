<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

// gerente
final class ManagerHandler extends ApproveHandler
{
    public function processSale(Sale $sale): void
    {
        if ($sale->price >= 3_000 && $sale->price < 30_000) {
            printf("Sale approved by manager with price %.2f\n", $sale->price);
        } else {
            parent::processSale($sale);
        }
    }
}
