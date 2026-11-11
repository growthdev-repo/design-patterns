<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Flyweight;

final class MarkerStyle
{
    private readonly string $icon;
    private readonly string $color;

    public function __construct(string $icon, string $color)
    {
        $this->icon = $icon;
        $this->color = $color;
    }

    public function render(float $latitude, float $longitude): string
    {
        return sprintf('%s (%s) at %.4f, %.4f', $this->icon, $this->color, $latitude, $longitude);
    }
}
