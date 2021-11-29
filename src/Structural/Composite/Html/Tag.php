<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite\Html;

class Tag extends TagComponent
{
    private string $name;

    public function __construct(string $name, private ?string $content = null) 
    {
        $this->name = $name;
    }

    public function display(): void
    {
        if ($this->content) {
            echo "<{$this->name}>{$this->content}</{$this->name}>\n";
        } else {
            echo "<{$this->name} />\n";
        }
    }
}
