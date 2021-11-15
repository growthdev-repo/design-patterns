<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder\Burger;

final class BurgerDirector
{
    public function buildBurger(BurgerBuilderInterface $builder): Burger
    {
        return $builder->build();
    }
}
