<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\TemplateMethod;

class CommonPizza extends PizzaMaker
{
    protected function prepareDough(): void
    {
        echo "Preparing common dough...\n";
    }

    protected function addIngredients(): void
    {
        echo "Adding common ingredients...\n";
    }

    protected function assemble(): void
    {
        echo "Assembling pizza...\n";
    }

    protected function bake(): void
    {
        echo "Baking pizza...\n";
    }
}