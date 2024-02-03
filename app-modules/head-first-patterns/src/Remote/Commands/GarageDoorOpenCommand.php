<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\GarageDoor;

class GarageDoorOpenCommand implements Command
{
    public function __construct(private GarageDoor $garageDoor)
    {
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }

    public function undo(): void
    {
        $this->garageDoor->down();
    }
}
