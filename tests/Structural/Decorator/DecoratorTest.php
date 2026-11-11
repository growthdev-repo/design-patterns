<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Decorator;

use Growthdev\DesignPatterns\Structural\Decorator\EmailNotifier;
use Growthdev\DesignPatterns\Structural\Decorator\Notifier;
use Growthdev\DesignPatterns\Structural\Decorator\SlackNotifier;
use Growthdev\DesignPatterns\Structural\Decorator\SmsNotifier;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    public function testExpectOnlyEmailWithoutDecorators(): void
    {
        $notifier = new EmailNotifier('dev@example.com');
        $notifier->send('Deploy finished');

        $this->expectOutputString("E-mail to dev@example.com: Deploy finished\n");
    }

    public function testExpectEachDecoratorToAddOneChannel(): void
    {
        $notifier = new SlackNotifier(
            new SmsNotifier(new EmailNotifier('dev@example.com'), '+55 11 90000-0000'),
            '#deploys'
        );
        $notifier->send('Deploy finished');

        $this->expectOutputString(
            "E-mail to dev@example.com: Deploy finished\n"
            . "SMS to +55 11 90000-0000: Deploy finished\n"
            . "Slack to #deploys: Deploy finished\n"
        );
    }

    public function testExpectDecoratorsToBeChosenAtRuntime(): void
    {
        $preferences = ['slack' => '#deploys'];

        $notifier = new EmailNotifier('dev@example.com');

        if (isset($preferences['sms'])) {
            $notifier = new SmsNotifier($notifier, $preferences['sms']);
        }

        if (isset($preferences['slack'])) {
            $notifier = new SlackNotifier($notifier, $preferences['slack']);
        }

        $this->assertInstanceOf(Notifier::class, $notifier);

        $notifier->send('Deploy finished');

        $this->expectOutputString(
            "E-mail to dev@example.com: Deploy finished\n"
            . "Slack to #deploys: Deploy finished\n"
        );
    }
}
