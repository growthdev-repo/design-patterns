<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\ElectricMusicalInstrumentFactory;
use PHPUnit\Framework\TestCase;

final class ElectricMusicalInstrumentFactoryTest extends TestCase
{
    public function testCanCreateElectricGuitar(): void
    {
        $factory = new ElectricMusicalInstrumentFactory();
        $gianniniGuitar = $factory->createGuitar("Giannini");
        $tagimaGuitar = $factory->createGuitar("Tagima");
        $taylorGuitar = $factory->createGuitar("Taylor");

        $this->assertEquals("Giannini Electric Guitar", $gianniniGuitar->getModel());
        $this->assertEquals("Tagima Electric Guitar", $tagimaGuitar->getModel());
        $this->assertEquals("Taylor Electric Guitar", $taylorGuitar->getModel());
    }

    public function testCanCreateElectricPiano(): void
    {
        $factory = new ElectricMusicalInstrumentFactory();
        $yamahaPiano = $factory->createPiano("Yamaha");
        $korgPiano = $factory->createPiano("Korg");

        $this->assertEquals("Yamaha Electric Piano", $yamahaPiano->getModel());
        $this->assertEquals("Korg Electric Piano", $korgPiano->getModel());
    }


}
