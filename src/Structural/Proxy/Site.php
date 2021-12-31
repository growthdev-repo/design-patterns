<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

final class Site
{
    public readonly string $url;
    
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
