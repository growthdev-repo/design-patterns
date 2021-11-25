<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class UnixFileSystem implements FileSystem
{
    private string $fileName = 'file.sh';

    public function openFile(): void
    {
        printf("Unix file %s is open", $this->fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf("Unix file %s is writing of the contents: %s", $this->fileName, $content);
    }

    public function closeFile(): void
    {
        printf("Unix file %s is closed", $this->fileName);
    }
}
