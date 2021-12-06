<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

use SplObjectStorage;

class TagComposite extends TagComponent
{
    private SplObjectStorage $components;

    public function __construct(private string $name)
    {
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

    public function render(): string
    {
        $tag = "<{$this->name} {$this->property}>\n";
        foreach ($this->components as $component) {
            $tag .= $component->render();
        }
        $tag .= "</{$this->name}>\n";
        
        return $tag;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTagComposite($this);
    }
}