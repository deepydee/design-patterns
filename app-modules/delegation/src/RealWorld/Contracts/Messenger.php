<?php

declare(strict_types=1);

namespace Modules\Delegation\RealWorld\Contracts;

interface Messenger
{
    public function setSender(string $value): Messenger;
    public function setRecipient(string $value): Messenger;
    public function setMessage(string $value): Messenger;
    public function send(): bool;
}
