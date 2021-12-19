<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

// Diretor
final class DirectorHandler extends ApproveHandler
{
    public function processSale(Sale $sale): void
    {
        if ($sale->price >= 30_000) {
            printf("Sale approved by director with price %.2f\n", $sale->price);
        } else {
            parent::processSale($sale);
        }
    }
}
