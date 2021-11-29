<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite\Html;

use SplObjectStorage;

class TagComposite extends TagComponent
{
    private SplObjectStorage $components;

    public function __construct(private string $name)
    {
        parent::__construct($name);
        $this->components = new SplObjectStorage();
    }

    public function add(TagComponent $tagComponent): void
    {
        $this->components->attach($tagComponent);
    }

    public function getChild(TagComponent $tagComponent): TagComponent
    {
        if (!$this->components->contains($tagComponent)) {
            throw new \InvalidArgumentException('TagComponent not found');
        }
        return $tagComponent;
    }

    public function display(): void
    {
        echo "<{$this->name}>\n";
        foreach ($this->components as $component) {
            $component->display();
        }
        echo "</{$this->name}>\n";
    }
}