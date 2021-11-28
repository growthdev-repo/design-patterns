<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Observer;

final class Video
{
    public readonly string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}