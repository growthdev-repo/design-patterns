<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

interface Internet
{
    public function connectTo(Site $site): void;
}
