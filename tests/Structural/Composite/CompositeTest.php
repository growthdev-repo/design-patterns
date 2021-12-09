<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Composite;

use Growthdev\DesignPatterns\Structural\Composite\Product;
use Growthdev\DesignPatterns\Structural\Composite\ProductCatalog;
use PHPUnit\Framework\TestCase;

final class CompositeTest extends TestCase
{
    public function testCanCreateProductCatalog(): void
    {
        $catalog = new ProductCatalog('Catalog 1');
        $catalog2 = new ProductCatalog('Catalog 2');

        $catalog->add(new Product('Product 1', 10.0));
        $catalog->add(new Product('Product 2', 20.0));
        $catalog->add($catalog2);
        $catalog->getChild($catalog2)->add(new Product('Product 3', 30.0));
        $catalog->getChild($catalog2)->add(new Product('Product 4', 40.0));
        $catalog->getChild($catalog2)->add(new Product('Product 5', 50.0));

        $catalog->display();
        
        $this->expectOutputString(
            "Catalog: Catalog 1\n" .
            "Product: Product 1 R$ 10.00\n" .
            "Product: Product 2 R$ 20.00\n" .
            "Catalog: Catalog 2\n" .
            "Product: Product 3 R$ 30.00\n" .
            "Product: Product 4 R$ 40.00\n" .
            "Product: Product 5 R$ 50.00\n"
        );
    }
}