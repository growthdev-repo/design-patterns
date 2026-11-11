<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Flyweight;

final class MarkerStyleFactory
{
    /** @var array<string, MarkerStyle> */
    private array $styles = [];

    public function get(string $icon, string $color): MarkerStyle
    {
        $key = $icon . ':' . $color;

        if (!isset($this->styles[$key])) {
            $this->styles[$key] = new MarkerStyle($icon, $color);
        }

        return $this->styles[$key];
    }

    public function count(): int
    {
        return count($this->styles);
    }
}
