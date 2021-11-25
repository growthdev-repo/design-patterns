<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Command;

use Growthdev\DesignPatterns\Behavioral\Command\FileInvoker;
use Growthdev\DesignPatterns\Behavioral\Command\OpenFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\WriteFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\CloseFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\WindowsFileSystem;

use PHPUnit\Framework\TestCase;

final class WindowsFileSystemCommandTest extends TestCase
{
    public function testCanExecuteOpenFileCommand(): void
    {
        $openFile = new OpenFileCommand(new WindowsFileSystem);
        
        $invoker = new FileInvoker($openFile);
        $invoker->execute();

        $this->expectOutputString("Windows file file.bat is open");
    }

    public function testCanExecuteWrittingFileCommand(): void
    {
        $writeFile = new WriteFileCommand(
            new WindowsFileSystem,
            'sh Windows command'
        );
        
        $invoker = new FileInvoker($writeFile);
        $invoker->execute();

        $this->expectOutputString(
            "Windows file file.bat is writing of the contents: sh Windows command"
        );
    }

    public function testCanExecuteCloseFileCommand(): void
    {
        $closeFile = new CloseFileCommand(new WindowsFileSystem);
        
        $invoker = new FileInvoker($closeFile);
        $invoker->execute();

        $this->expectOutputString("Windows file file.bat is closed");
    }
}
