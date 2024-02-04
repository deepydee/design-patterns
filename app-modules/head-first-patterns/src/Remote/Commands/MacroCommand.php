<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Illuminate\Support\Collection;
use Modules\HeadFirstPatterns\Remote\Contracts\Command;

class MacroCommand implements Command
{
    /** @var Collection<int, Command> */
    public function __construct(private Collection $commands)
    {
    }

    public function execute(): void
    {
        $this->commands->each(fn (Command $command) => $command->execute());
    }

    public function undo(): void
    {
        $this->commands
            ->each(fn (Command $command) => $command->undo());
    }
}
