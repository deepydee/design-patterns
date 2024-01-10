<?php

declare(strict_types=1);

namespace Modules\StaticFactory;

use Modules\StaticFactory\Contracts\Messenger;
use Modules\StaticFactory\Messengers\EmailMessenger;
use Modules\StaticFactory\Messengers\SmsMessenger;

class AppMessenger implements Messenger
{
    private Messenger $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    static public function getDescription(): string
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
