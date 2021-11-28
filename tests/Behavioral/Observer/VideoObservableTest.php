<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Observer;

use Growthdev\DesignPatterns\Behavioral\Observer\Video;
use Growthdev\DesignPatterns\Behavioral\Observer\Subscriber;
use Growthdev\DesignPatterns\Behavioral\Observer\VideoObservable;
use Growthdev\DesignPatterns\Behavioral\Observer\VideoObserver;
use PHPUnit\Framework\TestCase;

final class VideoObservableTest extends TestCase
{
    public function testShouldCreateVideoObservers(): void
    {
        $video = new Video('Video: Create Obsever Pattern');
        
        $anaObserver = new VideoObserver(new Subscriber('ana@email.com.br'));
        $mariaObserver = new VideoObserver(new Subscriber('maria@email.com.br'));
        $walmirObserver = new VideoObserver(new Subscriber('walmir@email.com.br'));
        $joaoObserver = new VideoObserver(new Subscriber('joao@email.com.br'));

        $videoObservable = new VideoObservable($video);
        $videoObservable->attach($anaObserver);
        $videoObservable->attach($mariaObserver);
        $videoObservable->attach($walmirObserver);
        $videoObservable->attach($joaoObserver);

        // remove observer from list
        $videoObservable->detach($mariaObserver);

        $videoObservable->notify();

        $this->expectOutputString(
            "ana@email.com.br has been notified of \"Video: Create Obsever Pattern\"\n"
            . "walmir@email.com.br has been notified of \"Video: Create Obsever Pattern\"\n"
            . "joao@email.com.br has been notified of \"Video: Create Obsever Pattern\"\n"
        );
    }
}