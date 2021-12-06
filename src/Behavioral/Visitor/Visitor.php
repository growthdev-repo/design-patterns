<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

interface Visitor
{
    public function visitTag(Tag $tag): void;

    public function visitTagComposite(TagComposite $tagComposite): void;
}