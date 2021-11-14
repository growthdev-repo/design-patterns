<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder\Burger;

class BurgerBuilder implements BurgerBuilderInterface
{
    private Burger $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function addBread(string $bread): self
    {
        $this->burger->setBread($bread);

        return $this;
    }

    public function addPatty(string $patty): self
    {
        $this->burger->setPatty($patty);

        return $this;
    }

    public function addVeggies(string $veggies): self
    {
        $this->burger->setVeggies($veggies);

        return $this;
    }

    public function addSauces(string $sauces): self
    {
        $this->burger->setSauces($sauces);

        return $this;
    }

    public function addWithExtraCheese(): self
    {
        $this->burger->setWithExtraCheese(true);

        return $this;
    }

    public function build(): Burger
    {
        return $this->burger;
    }
}
