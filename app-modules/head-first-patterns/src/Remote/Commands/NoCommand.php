<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;

class NoCommand implements Command
{
    public function execute(): void
    {
    }
}
