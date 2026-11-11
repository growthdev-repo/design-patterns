<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Flyweight;

final class Marker
{
    private float $latitude;
    private float $longitude;
    private MarkerStyle $style;

    public function __construct(float $latitude, float $longitude, MarkerStyle $style)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->style = $style;
    }

    public function render(): string
    {
        return $this->style->render($this->latitude, $this->longitude);
    }
}
