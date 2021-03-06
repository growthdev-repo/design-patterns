<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command\Receiver;

interface FileSystem
{
    public function openFile(): void;
    public function writeFile(string $content): void;
    public function closeFile(): void;
}
