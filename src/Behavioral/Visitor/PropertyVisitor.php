<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

final class PropertyVisitor implements Visitor
{
    private function addPropertyClass(string $replaceTo, TagComponent $tag): void
    {
        echo str_replace('>', " class=\"${$replaceTo}\">", $tag->render(), 1);
    }

    public function visitTag(Tag $tag): void
    {
        $this->addPropertyClass('tag-child', $tag);
    } 

    public function visitTagComposite(TagComposite $tagComposite): void
    {
        $this->addPropertyClass('tag-parent', $tagComposite);
    }
}