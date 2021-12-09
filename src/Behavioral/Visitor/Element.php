<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Visitor;

interface Element
{
    public function accept(Visitor $visitor): void;
}