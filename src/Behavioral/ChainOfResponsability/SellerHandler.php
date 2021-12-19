<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

// vendedor
final class SellerHandler extends ApproveHandler
{
    public function processSale(Sale $sale): void
    {        
        if ($sale->price < 3_000) {
            printf("Sale approved by seller with price %.2f\n", $sale->price);
        } else {
            parent::processSale($sale);
        }
    }
}
