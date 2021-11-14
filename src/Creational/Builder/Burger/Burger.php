<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Builder\Burger;

class Burger
{
    private string $bread;
    private string $patty;
    private string $veggies;
    private string $sauces;
    private bool $withExtraCheese = false;

    public function setBread(string $bread): void
    {
        $this->bread = $bread;
    }

    public function setPatty(string $patty): void
    {
        $this->patty = $patty;
    }

    public function setVeggies(string $veggies): void
    {
        $this->veggies = $veggies;
    }

    public function setSauces(string $sauces): void
    {
        $this->sauces = $sauces;
    }

    public function setWithExtraCheese(bool $withExtraCheese): void
    {
        $this->withExtraCheese = $withExtraCheese;
    }

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

    public function __toString(): string
    {
        return "Bread: {$this->getBread()}\n"
            . "Patty: {$this->getPatty()}\n"
            . "Veggies: {$this->getVeggies()}\n"
            . "Sauces: {$this->getSauces()}\n"
            . "Extra cheese: {$this->getWithExtraCheese()}\n";
    }
}
