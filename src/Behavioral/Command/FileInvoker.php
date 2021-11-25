<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Command;

final class FileInvoker
{
    private Command $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function execute(): void
    {
        $this->command->execute();
    }
}
