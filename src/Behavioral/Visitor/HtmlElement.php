<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

class HtmlElement extends HtmlTag
{
    private ?string $content;

    public function __construct(?string $content = '') 
    {
        $this->content = $content;
    }

    public function generateHtml(): void
    {
        if ($this->content) {
            echo "{$this->startTag} {$this->content} {$this->endTag}\n";
        } else {
            echo "{$this->startTag}\n";
        }
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitHtmlElement($this);
    }
}
