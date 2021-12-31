<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

use Exception;

final class ProxyInternet implements Internet
{
    private Internet $internet;
    private array $bannedSites = [
        'http://xxxvideos.com',
        'http://xtzsite.com',
        'http://redsite.com',
        'http://sitetube.com'
    ];

    public function __construct()
    {
        $this->internet = new RealInternet();
    }

    public function connectTo(Site $site): void
    {
        if (in_array($site->url, $this->bannedSites)) {
            throw new Exception('Access denied');
        }

        $this->internet->connectTo($site);
    }
}
