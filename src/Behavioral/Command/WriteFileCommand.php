<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command;

final class WriteFileCommand implements Command
{
    private FileSystemReceiver $fileSystemReceiver;

    public function __construct(
        FileSystemReceiver $fileSystemReceiver,
        private string $content
    ) {
        $this->fileSystemReceiver = $fileSystemReceiver;
    }

    public function execute(): void
    {
        $this->fileSystemReceiver->writeFile($this->content);
    }
}
