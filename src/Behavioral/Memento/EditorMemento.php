<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Memento;

interface EditorMemento
{
    public function getContent(): string;
}