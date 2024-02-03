<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Traits;

use Modules\HeadFirstPatterns\Remote\Enums\FanLevel;

trait CeilingFanTrait
{
    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case FanLevel::HIGH:
                $this->ceilingFan->high();
                break;
            case FanLevel::MEDIUM:
                $this->ceilingFan->medium();
                break;
            case FanLevel::LOW:
                $this->ceilingFan->low();
                break;
            case FanLevel::OFF:
                $this->ceilingFan->off();
                break;
        }
    }
}
