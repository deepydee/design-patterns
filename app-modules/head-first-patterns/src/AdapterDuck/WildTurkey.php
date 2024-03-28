<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck;

use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Turkey;

final class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo 'Gobble gobble';
    }

    public function fly(): void
    {
        echo 'I\'m flying a short distance';
    }
}
