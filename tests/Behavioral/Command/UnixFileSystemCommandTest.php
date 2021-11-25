<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Command;

use Growthdev\DesignPatterns\Behavioral\Command\FileInvoker;
use Growthdev\DesignPatterns\Behavioral\Command\OpenFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\WriteFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\CloseFileCommand;
use Growthdev\DesignPatterns\Behavioral\Command\Receiver\UnixFileSystem;
use PHPUnit\Framework\TestCase;

final class UnixFileSystemCommandTest extends TestCase
{
    public function testCanExecuteOpenFileCommand(): void
    {
        $openFile = new OpenFileCommand(new UnixFileSystem);
        
        $invoker = new FileInvoker($openFile);
        $invoker->execute();

        $this->expectOutputString("Unix file file.sh is open");
    }

    public function testCanExecuteWrittingFileCommand(): void
    {
        $writeFile = new WriteFileCommand(
            new UnixFileSystem,
            'sh unix command'
        );
        
        $invoker = new FileInvoker($writeFile);
        $invoker->execute();

        $this->expectOutputString(
            "Unix file file.sh is writing of the contents: sh unix command"
        );
    }

    public function testCanExecuteCloseFileCommand(): void
    {
        $closeFile = new CloseFileCommand(new UnixFileSystem);
        
        $invoker = new FileInvoker($closeFile);
        $invoker->execute();

        $this->expectOutputString("Unix file file.sh is closed");
    }
}
