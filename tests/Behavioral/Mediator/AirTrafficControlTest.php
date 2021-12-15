<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Mediator;

use Growthdev\DesignPatterns\Behavioral\Mediator\Airbus;
use Growthdev\DesignPatterns\Behavioral\Mediator\Boing;
use Growthdev\DesignPatterns\Behavioral\Mediator\Cessna;
use Growthdev\DesignPatterns\Behavioral\Mediator\GRUAirTrafficControl;
use PHPUnit\Framework\TestCase;

final class AirTrafficControlTest extends TestCase
{
    public function testAirTrafficControlOfTheBoingSendingMessage(): void
    {
        $airTrafficControl = new GRUAirTrafficControl();
        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $boing->sendMessage("BOING: I am flying!");

        $this->assertEquals('Airbus received message: BOING: I am flying!', $airbus->getMessage());
        $this->assertEquals('Cessna received message: BOING: I am flying!', $cessna->getMessage());
    }

    public function testAirTrafficControlOfTheAirbusSendingMessage(): void
    {
        $airTrafficControl = new GRUAirTrafficControl();
        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $airbus->sendMessage("AIRBUS: I am flying!");

        $this->assertEquals('Boing received message: AIRBUS: I am flying!', $boing->getMessage());
        $this->assertEquals('Cessna received message: AIRBUS: I am flying!', $cessna->getMessage());
    }

    public function testAirTrafficControlOfTheCessnaSendingMessage(): void
    {
        $airTrafficControl = new GRUAirTrafficControl();
        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $cessna->sendMessage("CESSNA: I am flying!");

        $this->assertEquals('Boing received message: CESSNA: I am flying!', $boing->getMessage());
        $this->assertEquals('Airbus received message: CESSNA: I am flying!', $airbus->getMessage());
    }
}
