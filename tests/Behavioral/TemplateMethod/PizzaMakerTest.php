<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\TemplateMethod;

use Growthdev\DesignPatterns\Behavioral\TemplateMethod\CommonPizza;
use Growthdev\DesignPatterns\Behavioral\TemplateMethod\VeganPizza;
use PHPUnit\Framework\TestCase;

final class PizzaMakerTest extends TestCase
{
    public function testCanMakeCommonPizza(): void
    {
        $pizzaMaker = new CommonPizza();
        $pizzaMaker->makePizza();
        
        $this->expectOutputString(
            "Preparing common dough...\n"
            . "Adding common ingredients...\n"
            . "Assembling pizza...\n"
            . "Baking pizza...\n"
        );
    }

    public function testCanMakeVeganPizza(): void
    {
        $pizzaMaker = new VeganPizza();
        $pizzaMaker->makePizza();
        
        $this->expectOutputString(
            "Preparing vegan dough...\n"
            . "Adding vegan ingredients...\n"
            . "Assembling pizza...\n"
            . "Baking pizza...\n"
        );
    }
}