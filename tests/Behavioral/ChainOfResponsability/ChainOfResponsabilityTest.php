<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\ChainOfResponsability;

use Growthdev\DesignPatterns\Behavioral\ChainOfResponsability\DirectorHandler;
use Growthdev\DesignPatterns\Behavioral\ChainOfResponsability\ManagerHandler;
use Growthdev\DesignPatterns\Behavioral\ChainOfResponsability\Sale;
use Growthdev\DesignPatterns\Behavioral\ChainOfResponsability\SellerHandler;
use PHPUnit\Framework\TestCase;

final class ChainOfResponsabilityTest extends TestCase
{
    public function testExpectOfApproveBySeller()
    {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        // Request
        $sale = new Sale(2_999.99);
        $seller->processSale($sale);

        $this->expectOutputString("Sale approved by seller with price 2999.99\n");
    }

    public function testExpectOfApproveByManager()
    {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        // Request
        $sale = new Sale(3_999.99);
        $seller->processSale($sale);

        $this->expectOutputString("Sale approved by manager with price 3999.99\n");
    }

    public function testExpectOfApproveByDirector()
    {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        // Request
        $sale = new Sale(30_000.01);
        $seller->processSale($sale);

        $this->expectOutputString("Sale approved by director with price 30000.01\n");
    }
}