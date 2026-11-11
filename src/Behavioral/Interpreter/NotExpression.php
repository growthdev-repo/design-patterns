<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Interpreter;

final class NotExpression implements Expression
{
    private Expression $expression;

    public function __construct(Expression $expression)
    {
        $this->expression = $expression;
    }

    public function interpret(Context $context): bool
    {
        return !$this->expression->interpret($context);
    }
}
