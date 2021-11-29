<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite;

use SplObjectStorage;

final class ProductCatalog extends CatalogComponent
{
    private SplObjectStorage $products;

    public function __construct(private string $name)
    {
        $this->products = new SplObjectStorage();
    }

    public function add(CatalogComponent $catalogComponent): void
    {
        $this->products->attach($catalogComponent);
    }

    public function remove(CatalogComponent $catalogComponent): void
    {
        $this->products->detach($catalogComponent);
    }

    public function getChild(CatalogComponent $catalogComponent): CatalogComponent
    {
        if (!$this->products->contains($catalogComponent)) {
            throw new \InvalidArgumentException('CatalogComponent not found');
        }
        return $catalogComponent;
    }

    public function display(): void
    {
        echo "Catalog: {$this->name}\n";
        foreach ($this->products as $product) {
            $product->display();
        }
    }
}