<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

class RealInternet implements Internet
{
    public function connectTo(Site $site): void
    {
        printf("Connected to %s", $site->url);
    }
}
