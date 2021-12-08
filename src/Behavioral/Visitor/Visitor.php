<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

interface Visitor
{
    public function visitHtmlElement(HtmlElement $element): void;

    public function visitHtmlParentElement(HtmlParentElement $parentElement): void;
}