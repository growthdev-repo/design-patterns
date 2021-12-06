<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

class Tag extends TagComponent
{
    private string $name;

    public function __construct(string $name, private ?string $content = null) 
    {
        $this->name = $name;
    }

    public function render(): string
    {
        if ($this->content) {
            return "<{$this->name} {$this->property}>{$this->content}</{$this->name}>\n";
        } else {
            return "<{$this->name} />\n";
        }
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTag($this);
    }
}
