<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Iterator;

use ArrayObject;
use Growthdev\DesignPatterns\Behavioral\Iterator\Task;
use Growthdev\DesignPatterns\Behavioral\Iterator\TaskList;
use PHPUnit\Framework\TestCase;

final class TaskIteratorTest extends TestCase
{
    public function testCanIterateOverTaskList(): void
    {
        $tasks = new ArrayObject();
        $tasks->append(new Task('Task 1'));
        $tasks->append(new Task('Task 2'));
        $tasks->append(new Task('Task 3'));
        $tasks->append(new Task('Task 4'));

        $taskList = new TaskList($tasks);
        $iterator = $taskList->getIterator();

        $id = 1;
        while ($iterator->valid()) {
            $currentTask = $iterator->current();
            $this->assertEquals(sprintf('Task %d', $id), $currentTask->getName());
            $iterator->next();
            $id++;
        }
    }
}
