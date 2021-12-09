<?php

declare(strict_types=1);    

namespace Growthdev\DesignPatterns\Structural\Composite;

use BadMethodCallException;

abstract class CatalogComponent
{
    protected function add(CatalogComponent $catalogComponent): void
    {
        throw new BadMethodCallException('Method not implemented');
    }

    protected function remove(CatalogComponent $catalogComponent): void
    {
        throw new BadMethodCallException('Method not implemented');
    }

    protected function getChild(CatalogComponent $catalogComponent): CatalogComponent
    {
        throw new BadMethodCallException('Method not implemented');
    }

    abstract protected function display(): void;
}