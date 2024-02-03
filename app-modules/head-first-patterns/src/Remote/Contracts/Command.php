<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Contracts;

interface Command
{
    public function execute(): void;
}
