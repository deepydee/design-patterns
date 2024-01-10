<?php

declare(strict_types=1);

namespace Modules\StaticFactory;

use Modules\StaticFactory\Contracts\Messenger;
use Modules\StaticFactory\Contracts\MessengerStaticFactory;
use Modules\StaticFactory\Enums\MessageType;

class StaticFactory implements MessengerStaticFactory
{
    public static function build(MessageType $type): Messenger
    {
        $messenger = new AppMessenger();

        switch($type) {
            case MessageType::Email:
                $messenger->toEmail();
                $sender = 'sender@a.com';
                break;
            case MessageType::Sms:
                $messenger->toSms();
                $sender = '88002000600';
                break;
            default:
                throw new \Exception('Unknown message type');
        }

        $messenger
            ->setSender($sender)
            ->setRecipient('recipient@a.com')
            ->setMessage('Hello World');

        return $messenger;
    }
}
