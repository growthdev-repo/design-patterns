<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder;

trait BurgerTrait
{
    private string $bread = '';
    private string $patty = '';
    private string $veggies = '';
    private string $sauces = '';
    private bool $withExtraCheese = false;

    public function getBread(): string
    {
        return $this->bread;
    }

    public function getPatty(): string
    {
        return $this->patty;
    }

    public function getVeggies(): string
    {
        return $this->veggies;
    }

    public function getSauces(): string
    {
        return $this->sauces;
    }

    public function getWithExtraCheese(): bool
    {
        return $this->withExtraCheese;
    }
}
