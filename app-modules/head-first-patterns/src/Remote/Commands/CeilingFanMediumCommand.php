<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Enums\FanLevel;
use Modules\HeadFirstPatterns\Remote\Objects\CeilingFan;
use Modules\HeadFirstPatterns\Remote\Traits\CeilingFanTrait;

class CeilingFanMediumCommand implements Command
{
    use CeilingFanTrait;

    private FanLevel $prevSpeed = FanLevel::OFF;

    public function __construct(private CeilingFan $ceilingFan)
    {
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->medium();
    }
}
