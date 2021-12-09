<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

abstract class HtmlTag implements Element
{    
    protected string $startTag; 
    protected string $endTag;

    public function setStartTag(string $tag): void
    {
        $this->startTag = $tag;        
    }

    public function getStartTag(): string
    {
        return $this->startTag;
    }

    public function setEndTag(string $tag): void
    {
        $this->endTag = $tag;
    }

    public function addChildTag(HtmlTag $htmlTag): void {
        throw new \BadMethodCallException("Current operation is not support for this object");
    }

    public function getChildren(){
        throw new \BadMethodCallException("Current operation is not support for this object");
    }

    public abstract function generateHtml(): void;
}