<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Iterator;

final class Task
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
