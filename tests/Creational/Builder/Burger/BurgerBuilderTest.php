<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\Builder\Burger;

use Growthdev\DesignPatterns\Creational\Builder\Burger\BurgerBuilder;
use Growthdev\DesignPatterns\Creational\Builder\Burger\BurgerDirector;
use PHPUnit\Framework\TestCase;

final class BurgerBuilderTest extends TestCase
{
    public function testCanCreateBurger(): void
    {
        $burgerBuilder = (new BurgerBuilder())
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addVeggies("Pickles")
            ->addSauces("All")
            ->addWithExtraCheese();

        $burgerDirector = new BurgerDirector();
        $burger = $burgerDirector->buildBurger($burgerBuilder);
        
        $this->assertEquals("Brown Bread", $burger->getBread());
        $this->assertEquals("Beef", $burger->getPatty());
        $this->assertEquals("Pickles", $burger->getVeggies());
        $this->assertEquals("All", $burger->getSauces());
        $this->assertTrue($burger->getWithExtraCheese());
    }

    public function testCanCreatePartialBurger(): void
    {
        $burgerBuilder = (new BurgerBuilder())
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addSauces("All");

        $burgerDirector = new BurgerDirector();
        $burger = $burgerDirector->buildBurger($burgerBuilder);
        
        $this->assertEquals("Brown Bread", $burger->getBread());
        $this->assertEquals("Beef", $burger->getPatty());
        $this->assertEquals("All", $burger->getSauces());
    }
}
