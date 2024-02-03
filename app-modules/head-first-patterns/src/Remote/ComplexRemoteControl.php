<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote;

use Illuminate\Support\Collection;
use Modules\HeadFirstPatterns\Remote\Commands\NoCommand;
use Modules\HeadFirstPatterns\Remote\Contracts\Command;

class ComplexRemoteControl
{
    /** @var Collection<int, Command> */
    private Collection $onCommands;

    /** @var Collection<int, Command> */
    private Collection $offCommands;

    public function __construct()
    {
        $this->onCommands = Collection::times(7, fn () => new NoCommand());
        $this->offCommands = Collection::times(7, fn () => new NoCommand());
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands->put($slot, $onCommand);
        $this->offCommands->put($slot, $offCommand);
    }

    public function onButtonWasPressed(int $slot): void
    {
        $this->onCommands
            ->get($slot)
            ->execute();
    }

    public function offButtonWasPressed(int $slot): void
    {
        $this->offCommands
            ->get($slot)
            ->execute();
    }

    public function __toString(): string
    {
        $message = '<br>------ Remote Control -------<br>';

        $commands = $this->onCommands
            ->map(fn (Command $command, int $key) => "slot {$key}: on: ".get_class($command)
                .' off: '.get_class($this->offCommands->get($key))
            )
            ->join('<br>');

        return $message.$commands;
    }
}
