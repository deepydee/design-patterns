<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\CeilingFan;

class CeilingFanOffCommand implements Command
{
    public function __construct(private CeilingFan $ceilingFan)
    {
    }

    public function execute(): void
    {
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        $this->ceilingFan->high();
    }
}
