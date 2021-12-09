<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Visitor;


use Growthdev\DesignPatterns\Behavioral\Visitor\HtmlElement;
use Growthdev\DesignPatterns\Behavioral\Visitor\HtmlParentElement;
use Growthdev\DesignPatterns\Behavioral\Visitor\ClassPropertyVisitor;
use Growthdev\DesignPatterns\Behavioral\Visitor\StylePropertyVisitor;
use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    public function testVisitor(): void
    {
        $class = new ClassPropertyVisitor();
        $style = new StylePropertyVisitor();
         
        $html = new HtmlParentElement();
        $html->setStartTag("<html>");
        

        $body = new HtmlParentElement();
        $body->setStartTag("<body>");
        $body->accept($style);
        $body->accept($class);    
            
        $html->addChildTag($body);   
        
        $p = new HtmlElement("Testing html tag library");
        $p->setStartTag("<p>");
        $p->accept($style);
        $p->accept($class);

        $p->setEndTag("</p>");
        
        $html->getChild($body)->addChildTag($p);
        $html->getChild($body)->setEndTag("</body>");

        $html->setEndTag("</html>");
        $html->generateHtml();

        $this->expectOutputString(
            "<html>\n"
            ."<body style=\"width:758px;\" class=\"visitor-parent\">\n"
            ."<p style=\"width:580px;\" class=\"visitor-child\"> Testing html tag library </p>\n"
            ."</body>\n"
            ."</html>\n"
        );
    }
}