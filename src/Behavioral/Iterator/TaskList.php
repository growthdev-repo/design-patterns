<?php

declare(strinct_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Iterator;

use ArrayObject;
use Iterator;
use IteratorAggregate;

final class TaskList implements IteratorAggregate
{
    private ArrayObject $tasks;

    public function __construct(ArrayObject $tasks)
    {
        $this->tasks = $tasks;
    }

    public function getIterator(): Iterator
    {
        return new TaskIterator($this->tasks);
    }
}