<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Creational\FactoryMethod;

use Growthdev\DesignPatterns\Creational\FactoryMethod\Factory\AcousticGuitarFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Factory\ElectricGuitarFactory;
use Growthdev\DesignPatterns\Creational\FactoryMethod\Product\MusicalInstrument;

class MusicalInstrumentFactory
{
    public const ACOUSTIC_GUITAR = 'acoustic_guitar';
    public const ELECTRIC_GUITAR = 'electric_guitar';

    public function createMusicalInstrument(string $type, string $brand): MusicalInstrument
    {
        switch ($type) {
            case self::ACOUSTIC_GUITAR:
                return (new AcousticGuitarFactory())
                    ->createMusicalInstrument($brand);
            case self::ELECTRIC_GUITAR:
                return (new ElectricGuitarFactory())
                    ->createMusicalInstrument($brand);
            default:
                throw new \InvalidArgumentException('Invalid musical instrument type');
        }
    }
}
