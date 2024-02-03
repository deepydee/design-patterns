<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\Hottub;

class HottubOffCommand implements Command
{
    public function __construct(private Hottub $hottub)
    {
    }

    public function execute(): void
    {
        $this->hottub->cool();
        $this->hottub->off();
    }
}
