<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Proxy;

use Exception;
use SplObjectStorage;

final class ProxyInternet implements Internet
{
    private Internet $internet;
    private SplObjectStorage $bannedSites;

    public function __construct()
    {
        $this->internet = new RealInternet();
        $this->bannedSites = new SplObjectStorage();
        $this->bannedSites->attach(new Site('xxxvideos.com'));
        $this->bannedSites->attach(new Site('xtzsite.com'));
        $this->bannedSites->attach(new Site('redsite.com'));
        $this->bannedSites->attach(new Site('sitetube.com'));
    }

    public function connectTo(Site $site): void
    {
        if ($this->bannedSites->contains($site)) {
            throw new Exception("Access Denied");
        }

        $this->internet->connectTo($site);
    }
}
