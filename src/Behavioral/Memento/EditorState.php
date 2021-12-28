<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Memento;

final class EditorState implements EditorMemento
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}