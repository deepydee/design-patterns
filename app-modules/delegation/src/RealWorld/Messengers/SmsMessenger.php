<?php

declare(strict_types=1);

namespace Modules\Delegation\RealWorld\Messengers;

use Modules\Delegation\RealWorld\Messengers\AbstractMessenger;

final class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        echo 'Sent by ' . __METHOD__ . '.<br>';

        echo 'Sender: ' . $this->sender . '<br>';
        echo 'Recipient: ' . $this->recipient . '<br>';
        echo 'Message: ' . $this->message . '<br>';

        return parent::send();
    }
}
