<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Interpreter;

use InvalidArgumentException;

final class Context
{
    /** @var array<string, string|int|float> */
    private array $values;

    /** @param array<string, string|int|float> $values */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function get(string $field): string|int|float
    {
        if (!array_key_exists($field, $this->values)) {
            throw new InvalidArgumentException(sprintf('Unknown field: %s', $field));
        }

        return $this->values[$field];
    }
}
