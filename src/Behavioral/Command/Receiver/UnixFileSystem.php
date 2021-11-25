<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class UnixFileSystem implements FileSystem
{
    private string $fileName = 'unix_file';

    public function openFile(): void
    {
        printf('Unix file %s is open\n', $this->fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf('Unix file %s is writing\n', $this->fileName);
        printf('Content: %s\n', $content);
    }

    public function closeFile(): void
    {
        printf('Unix file %s is closed\n', $this->fileName);
    }
}
