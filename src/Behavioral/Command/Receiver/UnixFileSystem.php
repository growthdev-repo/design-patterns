<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

final class UnixFileSystem implements FileSystem
{
    private string $fileName;

    public function openFile(string $fileName): void
    {
        $this->fileName = $fileName;

        printf('Unix file %s is open' . PHP_EOL, $fileName);
    }
    
    public function writeFile(string $content): void
    {
        printf('Unix file %s is writing' . PHP_EOL, $this->fileName);
        printf('Content: %s' . PHP_EOL, $content);
    }

    public function closeFile(): void
    {
        printf('Unix file %s is closed' . PHP_EOL, $this->fileName);
    }
}
