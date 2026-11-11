<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Interpreter;

interface Expression
{
    public function interpret(Context $context): bool;
}
