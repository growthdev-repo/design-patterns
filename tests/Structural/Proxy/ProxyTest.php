<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Proxy;

use Exception;
use Growthdev\DesignPatterns\Structural\Proxy\ProxyInternet;
use Growthdev\DesignPatterns\Structural\Proxy\Site;
use PHPUnit\Framework\TestCase;

final class ProxyTest extends TestCase
{
    public function testExpectAccessToTheSiteDenied(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Access denied');

        $internet = new ProxyInternet();
        $internet->connectTo(new Site('http://xxxvideos.com'));
    }

    public function testExpectAccessToTheSiteGranted(): void
    {
        $internet = new ProxyInternet();
        $internet->connectTo(new Site('http://growthdev.com.br'));

        $this->expectOutputString('Connected to http://growthdev.com.br');
    }
}
