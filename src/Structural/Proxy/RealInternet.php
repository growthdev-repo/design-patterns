<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

class RealInternet implements Internet
{
    public function connectTo(Site $site): void
    {
        printf("Connectiing to %s", $site->url);
    }
}