<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\TemplateMethod;

class VeganPizza extends PizzaMaker
{
    protected function prepareDough(): void
    {
        echo "Preparing vegan dough...\n";
    }

    protected function addIngredients(): void
    {
        echo "Adding vegan ingredients...\n";
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
