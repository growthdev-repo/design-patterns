<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Prototype;

abstract class Smartphone implements Cloneable
{
    private string $name;
    private float $price;
    private string $addicionalFeatures = 'none';

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function setAddicionalFeatures(string $addicionalFeatures): self
    {
        $this->addicionalFeatures = $addicionalFeatures;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAddicionalFeatures(): string
    {
        return $this->addicionalFeatures;
    }

    public function getModel(): string
    {
        return sprintf(
            'Model name: %s, Price: %.2f, Addicional Features: %s',
            $this->name,
            $this->price,
            $this->addicionalFeatures
        );
    }
}
