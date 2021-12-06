<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

abstract class TagComponent implements Element
{    
    public function add(TagComponent $tagComponent): void
    {
        throw new \BadMethodCallException('Method not implemented');
    }

    public function getChild(TagComponent $tagComponent): TagComponent
    {
        throw new \BadMethodCallException('Method not implemented');
    }

    abstract public function render(): string;
}