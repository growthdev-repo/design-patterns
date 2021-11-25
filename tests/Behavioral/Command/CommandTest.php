<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Command;

use Growthdev\DesignPatterns\Behavioral\Command\CloseFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\FileInvoker;
use Growthdev\DesignPatterns\Behavioral\Command\OpenFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\FileSystem;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\UnixFileSystem;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\WindowsFileSystem;
use Growthdev\DesignPatterns\Behavioral\Command\WriteFileCommand;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    private static function getFileSystem(): FileSystem
    {
        $os = strtoupper(substr(PHP_OS, 0, 3)) === 'LIN';

        return $os ? new UnixFileSystem() : new WindowsFileSystem();
    }

    public function testCanExecuteOpenFileCommand(): void
    {
        $openFile = new OpenFileCommand(self::getFileSystem());
        
        $invoker = new FileInvoker($openFile);
        $invoker->execute();

        $this->expectOutputString("Unix file file.sh is open");
    }

    public function testCanExecuteWrittingFileCommand(): void
    {
        $writeFile = new WriteFileCommand(
            self::getFileSystem(),
            'sh unix command'
        );
        
        $invoker = new FileInvoker($writeFile);
        $invoker->execute();

        $this->expectOutputString("Unix file file.sh is writing of the contents: sh unix command");
    }

    public function testCanExecuteCloseFileCommand(): void
    {
        $closeFile = new CloseFileCommand(self::getFileSystem());
        
        $invoker = new FileInvoker($closeFile);
        $invoker->execute();

        $this->expectOutputString("Unix file file.sh is closed");
    }
}
