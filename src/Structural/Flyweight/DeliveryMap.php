<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Flyweight;

final class DeliveryMap
{
    private MarkerStyleFactory $styles;

    /** @var Marker[] */
    private array $markers = [];

    public function __construct(MarkerStyleFactory $styles)
    {
        $this->styles = $styles;
    }

    public function addMarker(float $latitude, float $longitude, string $icon, string $color): void
    {
        $this->markers[] = new Marker($latitude, $longitude, $this->styles->get($icon, $color));
    }

    public function count(): int
    {
        return count($this->markers);
    }

    /** @return string[] */
    public function render(): array
    {
        return array_map(static fn (Marker $marker): string => $marker->render(), $this->markers);
    }
}
