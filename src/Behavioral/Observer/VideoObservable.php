<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

final class VideoObservable implements SplSubject
{   
    public readonly Video $video;
    private SplObjectStorage $observers;

    public function __construct(
        Video $video
    ){
        $this->video = $video;
        $this->observers = new SplObjectStorage();  
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }    
}