<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Interpreter;

final class EqualsExpression implements Expression
{
    private string $field;
    private string $value;

    public function __construct(string $field, string $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function interpret(Context $context): bool
    {
        return $context->get($this->field) === $this->value;
    }
}
