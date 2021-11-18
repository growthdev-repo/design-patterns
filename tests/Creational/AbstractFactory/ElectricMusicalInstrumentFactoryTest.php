<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\ElectricMusicalInstrumentFactory;
use PHPUnit\Framework\TestCase;

final class ElectricMusicalInstrumentFactoryTest extends TestCase
{
    public function testCanBuildElectricGuitar(): void
    {
        $factory = new ElectricMusicalInstrumentFactory();
        $gianniniGuitar = $factory->buildGuitar("Giannini");
        $tagimaGuitar = $factory->buildGuitar("Tagima");
        $taylorGuitar = $factory->buildGuitar("Taylor");

        $this->assertEquals("Giannini Electric Guitar", $gianniniGuitar->getModel());
        $this->assertEquals("Tagima Electric Guitar", $tagimaGuitar->getModel());
        $this->assertEquals("Taylor Electric Guitar", $taylorGuitar->getModel());
    }

    public function testCanBuildElectricPiano(): void
    {
        $factory = new ElectricMusicalInstrumentFactory();
        $yamahaPiano = $factory->buildPiano("Yamaha");
        $korgPiano = $factory->buildPiano("Korg");

        $this->assertEquals("Yamaha Electric Piano", $yamahaPiano->getModel());
        $this->assertEquals("Korg Electric Piano", $korgPiano->getModel());
    }


}
