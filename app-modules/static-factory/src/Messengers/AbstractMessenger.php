<?php

declare(strict_types=1);

namespace Modules\StaticFactory\Messengers;

use Modules\StaticFactory\Contracts\Messenger;

abstract class AbstractMessenger implements Messenger
{
    protected string $sender;

    protected string $recipient;

    protected string $message;

    public function setSender(string $value): Messenger
    {
        $this->sender = $value;

        return $this;
    }

    public function setRecipient(string $value): Messenger
    {
        $this->recipient = $value;

        return $this;
    }

    public function setMessage(string $value): Messenger
    {
        $this->message = $value;

        return $this;
    }

    public function send(): bool
    {
        return true;
    }
}
