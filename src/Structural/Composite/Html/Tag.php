<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite\Html;

class Tag extends TagComponent
{
    public function __construct(
        private string $name, 
        private ?string $content = null
    ) {
        parent::__construct($name, $content);
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
