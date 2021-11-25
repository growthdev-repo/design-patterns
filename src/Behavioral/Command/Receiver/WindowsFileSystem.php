<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class WindowsFileSystem implements FileSystem
{
    private string $fileName = 'windows_file';

    public function openFile(): void
    {
        printf('Windows file %s is open\n', $this->fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf('Windows file %s is writing\n', $this->fileName);
        printf('Content: %s' . PHP_EOL, $content);
    }

    public function closeFile(): void
    {
        printf('Windows file %s is closed\n', $this->fileName);
    }
}
