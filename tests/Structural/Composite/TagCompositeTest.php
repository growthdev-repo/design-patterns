<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Composite\Html;

use Growthdev\DesignPatterns\Structural\Composite\Html\Tag;
use Growthdev\DesignPatterns\Structural\Composite\Html\TagComposite;
use PHPUnit\Framework\TestCase;

final class TagCompositeTest extends TestCase
{
    public function testCanCreateHtmlComposite(): void
    {
        $html = new TagComposite('html');
        $head = new TagComposite('head');
        $head->add(new Tag('title', 'Hello World'));
        $html->add($head);

        $body = new TagComposite('body');
        $div = new TagComposite('div');
        
        $body->add($div);
        $body->getChild($div)->add(new Tag('img'));
        $body->getChild($div)->add(new Tag('h1', 'Growth Dev'));

        $html->add($body);
        $html->display();

        $this->expectOutputString(
            "<html>\n"
            . "<head>\n"
            .    "<title>Hello World</title>\n"
            . "</head>\n"
            . "<body>\n"
            .    "<div>\n"
            .      "<img />\n"
            .        "<h1>Growth Dev</h1>\n"
            .    "</div>\n"
            . "</body>\n"
            . "</html>\n"
        );
    }
}