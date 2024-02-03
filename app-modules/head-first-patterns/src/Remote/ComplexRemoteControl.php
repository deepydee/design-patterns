<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote;

use Illuminate\Support\Collection;
use Modules\HeadFirstPatterns\Remote\Commands\NoCommand;
use Modules\HeadFirstPatterns\Remote\Contracts\Command;

class ComplexRemoteControl
{
    /** @var Collection<int, Command|callable> */
    private Collection $onCommands;

    /** @var Collection<int, Command|callable> */
    private Collection $offCommands;

    public function __construct()
    {
        $this->onCommands = Collection::times(7, fn () => new NoCommand());
        $this->offCommands = Collection::times(7, fn () => new NoCommand());
    }

    public function setCommand(int $slot, Command|callable $onCommand, Command|callable $offCommand): void
    {
        $this->onCommands->put($slot, $onCommand);
        $this->offCommands->put($slot, $offCommand);
    }

    public function onButtonWasPressed(int $slot): void
    {
        $onCommand = $this->onCommands->get($slot);

        if (is_callable($onCommand)) {
            $onCommand();

            return;
        }

        $onCommand->execute();
    }

    public function offButtonWasPressed(int $slot): void
    {
        $offCommand = $this->offCommands->get($slot);

        if (is_callable($offCommand)) {
            $offCommand();

            return;
        }

        $offCommand->execute();
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
