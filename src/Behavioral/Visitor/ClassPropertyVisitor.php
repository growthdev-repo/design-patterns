<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

final class ClassPropertyVisitor implements Visitor
{
    private function changeProperty(HtmlTag $tag, string $className): string
    {
        $tagName = str_replace(['<','>'], '', $tag->getStartTag());
        return sprintf("<%s class=\"%s\">", $tagName, $className);
    }
    
    public function visitHtmlElement(HtmlElement $element): void
    {
        $element->setStartTag($this->changeProperty($element, 'visitor-child'));
    }

    public function visitHtmlParentElement(HtmlParentElement $parentElement): void
    {
        $parentElement->setStartTag($this->changeProperty($parentElement, 'visitor-parent'));
    }
}