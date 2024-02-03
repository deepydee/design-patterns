<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;

class SimpleRemoteControl
{
    private Command $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}
