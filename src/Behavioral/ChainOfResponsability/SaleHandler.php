<?php
declare(strict_types=1);

namespace DesignPattern\Behavioral\ChainOfResponsability;

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsability;

interface SaleHandler 
{
    public function processSale(Sale $sale): void;
}