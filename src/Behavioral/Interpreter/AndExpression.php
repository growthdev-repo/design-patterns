<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Interpreter;

final class AndExpression implements Expression
{
    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(Context $context): bool
    {
        return $this->left->interpret($context) && $this->right->interpret($context);
    }
}
