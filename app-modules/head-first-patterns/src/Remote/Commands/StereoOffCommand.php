<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\Stereo;

class StereoOffCommand implements Command
{
    public function __construct(private Stereo $stereo)
    {
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}
