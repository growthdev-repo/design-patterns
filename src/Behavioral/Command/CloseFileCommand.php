<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command;

use Growthdev\DesignPatterns\Behavioral\Command\Receiver\FileSystem;

final class CloseFileCommand implements Command
{
    private FileSystem $fileSystem;

    public function __construct(FileSystem $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function execute(): void
    {
        $this->fileSystem->closeFile();
    }
}
