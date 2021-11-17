<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Creational\AbstractFactory;

use Growthdev\DesignPatterns\Creational\AbstractFactory\NormalMusicalInstrumentFactory;
use PHPUnit\Framework\TestCase;

final class NormalMusicalInstrumentFactoryTest extends TestCase
{
    public function testCanCreateNormalGuitar(): void
    {
        $factory = new NormalMusicalInstrumentFactory();
        $gianniniGuitar = $factory->createGuitar("Giannini");
        $tagimaGuitar = $factory->createGuitar("Tagima");
        $taylorGuitar = $factory->createGuitar("Taylor");

        $this->assertEquals("Giannini Normal Guitar", $gianniniGuitar->getModel());
        $this->assertEquals("Tagima Normal Guitar", $tagimaGuitar->getModel());
        $this->assertEquals("Taylor Normal Guitar", $taylorGuitar->getModel());
    }

    public function testCanCreateNormalPiano(): void
    {
        $factory = new NormalMusicalInstrumentFactory();
        $bosendorferPiano = $factory->createPiano("Bosendorfer");
        $fazioliPiano = $factory->createPiano("Fazioli");

        $this->assertEquals("Bosendorfer Normal Piano", $bosendorferPiano->getModel());
        $this->assertEquals("Fazioli Normal Piano", $fazioliPiano->getModel());
    }
}
