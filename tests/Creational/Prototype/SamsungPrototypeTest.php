<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\Prototype;

use Growthdev\DesignPatterns\Creational\Prototype\Samsung;
use PHPUnit\Framework\TestCase;

final class SamsungPrototypeTest extends TestCase
{
    public function testCanCreateSamsungPhoneClone(): void
    {
        $samsungXPT1 = (new Samsung())
            ->setName('Samsung XPT1')
            ->setPrice(1000);

        $samsungXPT2 = clone $samsungXPT1;

        $samsungXPT2->setName('Samsung XPT2')
            ->setPrice(2000)
            ->setAddicionalFeatures('99 GB');

        $this->assertEquals(
            'Model name: Samsung XPT1, Price: 1000.00, Addicional Features: none',
            $samsungXPT1->getModel()
        );

        $this->assertEquals(
            'Model name: Samsung XPT2, Price: 2000.00, Addicional Features: 99 GB',
            $samsungXPT2->getModel()
        );
    }
}
