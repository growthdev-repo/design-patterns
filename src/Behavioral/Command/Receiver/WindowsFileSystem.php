<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class WindowsFileSystem implements FileSystem
{
    private string $fileName = 'file.bat';

    public function openFile(): void
    {
        printf("Windows file %s is open", $this->fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf("Windows file %s is writing of the contents: %s", $this->fileName, $content);
    }

    public function closeFile(): void
    {
        printf("Windows file %s is closed", $this->fileName);
    }
}
