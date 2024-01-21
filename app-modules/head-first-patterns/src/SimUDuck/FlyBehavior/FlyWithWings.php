<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\SimUDuck\FlyBehavior;

use Modules\HeadFirstPatterns\SimUDuck\Contracts\FlyBehavior;

final class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying!<br>";
    }
}
