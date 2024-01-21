<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\SimUDuck\FlyBehavior;

use Modules\HeadFirstPatterns\SimUDuck\Contracts\FlyBehavior;

final class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I’m flying with a rocket!<br>";
    }
}
