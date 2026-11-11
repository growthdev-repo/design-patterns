<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Flyweight;

use Growthdev\DesignPatterns\Structural\Flyweight\DeliveryMap;
use Growthdev\DesignPatterns\Structural\Flyweight\MarkerStyleFactory;
use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    public function testExpectSameInstanceForSameStyle(): void
    {
        $factory = new MarkerStyleFactory();

        $this->assertSame($factory->get('truck', 'blue'), $factory->get('truck', 'blue'));
        $this->assertSame(1, $factory->count());
    }

    public function testExpectDifferentInstancesForDifferentStyles(): void
    {
        $factory = new MarkerStyleFactory();

        $this->assertNotSame($factory->get('truck', 'blue'), $factory->get('store', 'green'));
        $this->assertSame(2, $factory->count());
    }

    public function testExpectThousandsOfMarkersToShareFewStyles(): void
    {
        $factory = new MarkerStyleFactory();
        $map = new DeliveryMap($factory);

        for ($i = 0; $i < 10000; $i++) {
            if ($i % 2 === 0) {
                $map->addMarker(-23.55 + $i / 100000, -46.63, 'truck', 'blue');
            } else {
                $map->addMarker(-23.55, -46.63 + $i / 100000, 'store', 'green');
            }
        }

        $this->assertSame(10000, $map->count());
        $this->assertSame(2, $factory->count());
    }

    public function testExpectEachMarkerToKeepItsOwnPosition(): void
    {
        $map = new DeliveryMap(new MarkerStyleFactory());
        $map->addMarker(-23.5505, -46.6333, 'truck', 'blue');
        $map->addMarker(-22.9068, -43.1729, 'truck', 'blue');

        $this->assertSame(
            [
                'truck (blue) at -23.5505, -46.6333',
                'truck (blue) at -22.9068, -43.1729',
            ],
            $map->render()
        );
    }
}
