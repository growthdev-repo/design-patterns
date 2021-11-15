<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder\Burger;

interface BurgerBuilderInterface
{
    public function addBread(string $bread): self;

    public function addPatty(string $patty): self;

    public function addVeggies(string $veggies): self;

    public function addSauces(string $saouces): self;

    public function addWithExtraCheese(): self;

    public function build(): Burger;
}
