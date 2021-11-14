<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder;

class Burger implements BurgetInterface
{
    use BurgerTrait;

    public static function builder(): BurgerBuilderInterface
    {
        return new class implements BurgerBuilderInterface, BurgetInterface {
            use BurgerTrait;

            public function addBread(string $bread): self
            {
                $this->bread = $bread;

                return $this;
            }

            public function addPatty(string $patty): self
            {
                $this->patty = $patty;

                return $this;
            }

            public function addVeggies(string $veggies): self
            {
                $this->veggies = $veggies;

                return $this;
            }

            public function addSauces(string $sauces): self
            {
                $this->sauces = $sauces;

                return $this;
            }

            public function addWithExtraCheese(): self
            {
                $this->withExtraCheese = true;

                return $this;
            }

            public function build(): Burger
            {
                return new Burger($this);
            }
        };
    }

    public function __construct(BurgetInterface $builder)
    {
        $this->bread = $builder->getBread();
        $this->patty = $builder->getPatty();
        $this->veggies = $builder->getVeggies();
        $this->sauces = $builder->getSauces();
        $this->withExtraCheese = $builder->getWithExtraCheese();
    }
}
