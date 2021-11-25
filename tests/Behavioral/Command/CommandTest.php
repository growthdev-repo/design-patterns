<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Command;

use Growthdev\DesignPatterns\Behavioral\Command\FileInvoker;
use Growthdev\DesignPatterns\Behavioral\Command\OpenFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\FileSystem;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\UnixFileSystem;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\WindowsFileSystem;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    private static function getFileSystem(): FileSystem
    {
        $os = strtoupper(substr(PHP_OS, 0, 3)) === 'LIN';

        return $os ? new UnixFileSystem() : new WindowsFileSystem();
    }

    public function testCanInvokeFile(): void
    {
        $this->getFileSystem();

        
    }
}
