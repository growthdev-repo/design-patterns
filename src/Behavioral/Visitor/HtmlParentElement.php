<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

use SplObjectStorage;

class HtmlParentElement extends HtmlTag
{
    private SplObjectStorage $childrenTag;

    public function __construct()
    {
        $this->childrenTag = new SplObjectStorage();
    }

    public function addChildTag(HtmlTag $htmlTag): void
    {
        $this->childrenTag->attach($htmlTag);
    }

    public function removeChildTag(HtmlTag $htmlTag): void
    {
        $this->childrenTag->detach($htmlTag);
    }

    public function getChild(HtmlTag $htmlTag): HtmlTag
    {
        if (!$this->childrenTag->contains($htmlTag)) {
            throw new \InvalidArgumentException('HtmlTag not found');
        }
        return $htmlTag;
    }

    public function generateHtml(): void
    {
        printf("%s\n",$this->startTag);
        foreach($this->childrenTag as $tag){
            $tag->generateHtml();
        }
        printf("%s\n",$this->endTag);
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitHtmlParentElement($this);
    }
}