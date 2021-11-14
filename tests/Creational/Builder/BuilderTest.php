<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\Builder;

use Growthdev\DesignPatterns\Creational\Builder\Burger;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testCanCreateBurger(): void
    {
        $burger = Burger::builder()
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addVeggies("Pickles")
            ->addSauces("All")
            ->addWithExtraCheese()
            ->build();

        $this->assertEquals("Brown Bread", $burger->getBread());
        $this->assertEquals("Beef", $burger->getPatty());
        $this->assertEquals("Pickles", $burger->getVeggies());
        $this->assertEquals("All", $burger->getSauces());
        $this->assertTrue($burger->getWithExtraCheese());
    }

    public function testCanCreatePartialBurger(): void
    {
        $burger = Burger::builder()
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addSauces("All")
            ->build();
        
        $this->assertEquals("Brown Bread", $burger->getBread());
        $this->assertEquals("Beef", $burger->getPatty());
        $this->assertEquals("All", $burger->getSauces());
    }
}
