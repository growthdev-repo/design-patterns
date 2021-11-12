<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Strategy\WithMethodFactory;

use Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory\AcousticGuitarStrategy;
use Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory\ElectricGuitarStrategy;
use Growthdev\DesignPatterns\Behavioral\Strategy\WithMethodFactory\MusicalInstrumentFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\AcousticGuitar;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\ElectricGuitar;
use PHPUnit\Framework\TestCase;

final class MusicalInstrumentFactoryTest extends TestCase
{
    public function testCanCreateAcousticGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $acousticGuitar = $factory->createMusicalInstrument(
            new AcousticGuitarStrategy('Giannini Model')
        );

        $acousticGuitar->make();

        $this->assertInstanceOf(AcousticGuitar::class, $acousticGuitar);
    }

    public function testCanCreateEletricGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $eletricGuitar = $factory->createMusicalInstrument(
            new ElectricGuitarStrategy('Tagima Model')
        );

        $eletricGuitar->make();

        $this->assertInstanceOf(ElectricGuitar::class, $eletricGuitar);
    }
}
