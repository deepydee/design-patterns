<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\Hottub;

class HottubOnCommand implements Command
{
    public function __construct(private Hottub $hottub)
    {
    }

    public function execute(): void
    {
        $this->hottub->on();
        $this->hottub->heat();
        $this->hottub->bubblesOn();
    }

    public function undo(): void
    {
        $this->hottub->off();
        $this->hottub->cool();
        $this->hottub->bubblesOff();
    }
}
