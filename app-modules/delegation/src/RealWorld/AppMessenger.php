<?php

declare(strict_types=1);

namespace Modules\Delegation\RealWorld;

use Modules\Delegation\RealWorld\Contracts\Messenger;
use Modules\Delegation\RealWorld\Messengers\EmailMessenger;
use Modules\Delegation\RealWorld\Messengers\SmsMessenger;

class AppMessenger implements Messenger
{
    private Messenger $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public static function getDescription(): string
    {
        return 'App Messenger';
    }

    public function toEmail(): self
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public function toSms(): self
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    public function setSender(string $value): Messenger
    {
        $this->messenger->setSender($value);

        return $this;
    }

    public function setRecipient(string $value): Messenger
    {
        $this->messenger->setRecipient($value);

        return $this;
    }

    public function setMessage(string $value): Messenger
    {
        $this->messenger->setMessage($value);

        return $this;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}
