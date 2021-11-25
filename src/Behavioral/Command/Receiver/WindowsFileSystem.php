<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class WindowsFileSystem implements FileSystem
{
    private string $fileName;

    public function openFile(string $fileName): void
    {
        $this->fileName = $fileName;

        printf('Windows file %s is open' . PHP_EOL, $fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf('Windows file %s is writing' . PHP_EOL, $this->fileName);
        printf('Content: %s' . PHP_EOL, $content);
    }

    public function closeFile(): void
    {
        printf('Windows file %s is closed' . PHP_EOL, $this->fileName);
    }
}
