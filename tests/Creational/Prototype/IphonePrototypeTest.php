<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\Prototype;

use Growthdev\DesignPatterns\Creational\Prototype\Iphone;
use PHPUnit\Framework\TestCase;

final class IphonePrototypeTest extends TestCase
{
    public function testCanCreateIphoneClone(): void
    {
        $iphoneXQT1 = (new Iphone())
            ->setName('Iphone XQT1')
            ->setPrice(11000);

        $iphoneXQT2 = clone $iphoneXQT1;

        $iphoneXQT2->setName('Iphone XQT2')
            ->setPrice(250000)
            ->setAddicionalFeatures('99 GB');

        $this->assertEquals(
            'Model name: Iphone XQT1, Price: 11000.00, Addicional Features: none',
            $iphoneXQT1->getModel()
        );

        $this->assertEquals(
            'Model name: Iphone XQT2, Price: 250000.00, Addicional Features: 99 GB',
            $iphoneXQT2->getModel()
        );
    }
}
