<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\Light;

class LivingroomLightOnCommand implements Command
{
    public function __construct(private Light $light)
    {
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}
