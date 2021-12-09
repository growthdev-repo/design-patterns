<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

final class StylePropertyVisitor implements Visitor
{
    private function changeProperty(HtmlTag $tag, int $width): string
    {
        $tagName = str_replace(['<','>'], '', $tag->getStartTag());
        return sprintf("<%s style=\"width:%dpx;\">", $tagName, $width);
    }
    
    public function visitHtmlElement(HtmlElement $element): void
    {
        $element->setStartTag($this->changeProperty($element, 580));
    }

    public function visitHtmlParentElement(HtmlParentElement $parentElement): void
    {
        $parentElement->setStartTag($this->changeProperty($parentElement, 758));
    }
}