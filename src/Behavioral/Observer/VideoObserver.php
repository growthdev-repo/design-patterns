<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class VideoObserver implements SplObserver
{
    private Subscriber $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function update(SplSubject $subject): void
    {
       printf(
           "%s has been notified of \"%s\"\n", 
            $this->subscriber->email, 
            $subject->video->title
        );
    }
}