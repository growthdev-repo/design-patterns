<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

use Growthdev\DesignPatterns\Creational\FactoryMethod\MusicalInstrumentFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\AcousticGuitar;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\ElectricGuitar;

final class MusicalInstrumentFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateAcousticGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $acousticGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ACOUSTIC_GUITAR,
            'Giannini Model'
        );

        $acousticGuitar->make();

        $this->assertInstanceOf(AcousticGuitar::class, $acousticGuitar);
    }

    public function testCanCreateEletricGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $eletricGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ELECTRIC_GUITAR,
            'Giannini Model'
        );

        $eletricGuitar->make();

        $this->assertInstanceOf(ElectricGuitar::class, $eletricGuitar);
    }

    public function testShouldThrowExceptionWhenUnknownInstrument(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $factory = new MusicalInstrumentFactory();
        $factory->createMusicalInstrument('Unknown', 'Giannini Model');
    }
}
