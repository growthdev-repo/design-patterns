<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\Prototype;

abstract class Smartphone implements Cloneable
{
    private string $model;
    private float $price;
    private string $addicionalFeatures;

    public function setModel(string $model): self
    {
        $this->model = $model;

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

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAddicionalFeatures(): string
    {
        return $this->addicionalFeatures;
    }

    public function __clone()
    {
        $this->model = $this->model . ' clone';
    }

    public function __toString(): string
    {
        return sprintf(
            'Model: %s, Price: %.2f, Addicional Features: %s',
            $this->model,
            $this->price,
            $this->addicionalFeatures
        );
    }
}
