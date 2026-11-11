<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Tests\Structural\Bridge;

use Growthdev\DesignPatterns\Structural\Bridge\Channel;
use Growthdev\DesignPatterns\Structural\Bridge\EmailChannel;
use Growthdev\DesignPatterns\Structural\Bridge\OrderShippedNotification;
use Growthdev\DesignPatterns\Structural\Bridge\PaymentFailedNotification;
use Growthdev\DesignPatterns\Structural\Bridge\SmsChannel;
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase
{
    public function testExpectOrderShippedToBeSentByEmail(): void
    {
        $notification = new OrderShippedNotification(new EmailChannel(), '1001');
        $notification->notify('dev@example.com');

        $this->expectOutputString("Email to dev@example.com: Order 1001 has been shipped\n");
    }

    public function testExpectSameNotificationToBeSentBySms(): void
    {
        $notification = new OrderShippedNotification(new SmsChannel(), '1001');
        $notification->notify('+55 11 90000-0000');

        $this->expectOutputString("SMS to +55 11 90000-0000: Order 1001 has been shipped\n");
    }

    public function testExpectPaymentFailedToWorkWithEveryChannel(): void
    {
        (new PaymentFailedNotification(new EmailChannel(), '1002'))->notify('dev@example.com');
        (new PaymentFailedNotification(new SmsChannel(), '1002'))->notify('+55 11 90000-0000');

        $this->expectOutputString(
            "Email to dev@example.com: Payment for order 1002 failed\n"
            . "SMS to +55 11 90000-0000: Payment for order 1002 failed\n"
        );
    }

    public function testExpectNewChannelWithoutChangingNotifications(): void
    {
        $push = new class implements Channel {
            /** @var string[] */
            public array $sent = [];

            public function send(string $recipient, string $text): void
            {
                $this->sent[] = sprintf('Push to %s: %s', $recipient, $text);
            }
        };

        (new OrderShippedNotification($push, '1001'))->notify('device-42');
        (new PaymentFailedNotification($push, '1002'))->notify('device-42');

        $this->assertSame(
            [
                'Push to device-42: Order 1001 has been shipped',
                'Push to device-42: Payment for order 1002 failed',
            ],
            $push->sent
        );
    }
}
