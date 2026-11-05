<?php
declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\ChainOfResponsibility;

interface SaleHandler 
{
    public function processSale(Sale $sale): void;
}