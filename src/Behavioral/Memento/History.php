<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Memento;

use SplDoublyLinkedList;

//Caretaker
final class History
{
    private SplDoublyLinkedList $states;

    public function save(EditorMemento $memento): void
    {
        $this->states->push($memento);
    }

    public function restore(Editor $editor): void
    {
        if ($this->states->isEmpty()) {
            throw new \RuntimeException('No states to restore');
        }

        $memento = $this->states->pop();
        $editor->restore($memento);
    }
}