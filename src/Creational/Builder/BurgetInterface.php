<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder;

interface BurgetInterface
{
    public function getBread(): string;
    
    public function getPatty(): string;
    
    public function getVeggies(): string;
    
    public function getSauces(): string;

    public function getWithExtraCheese(): bool;
}
