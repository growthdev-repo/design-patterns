<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\TemplateMethod;

abstract class PizzaMaker
{
    abstract protected function prepareDough(): void;
    abstract protected function addIngredients(): void;
    abstract protected function bake(): void;
    abstract protected function assemble(): void;

    // Template method
    public function makePizza(): void
    {
        $this->prepareDough();
        $this->addIngredients();
        $this->assemble();
        $this->bake();
    }
}