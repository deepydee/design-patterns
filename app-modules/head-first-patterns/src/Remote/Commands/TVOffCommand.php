<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Commands;

use Modules\HeadFirstPatterns\Remote\Contracts\Command;
use Modules\HeadFirstPatterns\Remote\Objects\TV;

class TVOffCommand implements Command
{
    public function __construct(private TV $tv)
    {
    }

    public function execute(): void
    {
        $this->tv->off();

    }

    public function undo(): void
    {
        $this->tv->on();
        $this->tv->setInputChannel(3);
    }
}
