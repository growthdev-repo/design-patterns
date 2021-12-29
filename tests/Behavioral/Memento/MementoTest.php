<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Behavioral\Memento;

use Growthdev\DesignPatterns\Behavioral\Memento\Editor;
use Growthdev\DesignPatterns\Behavioral\Memento\History;
use PHPUnit\Framework\TestCase;

final class MementoTest extends TestCase
{
    public function testMemento()
    {
        $editor = new Editor();
        $history = new History();

        $editor->setContent('I');
        $history->save($editor->save());
        
        $editor->setContent('I am');
        $history->save($editor->save());

        $editor->setContent('I am Walmir');
        $history->save($editor->save());

        $this->assertEquals('I am Walmir', $editor->getContent());
        $history->restore($editor);
        $this->assertEquals('I am', $editor->getContent());
        $history->restore($editor);
        $this->assertEquals('I', $editor->getContent());
    }
}