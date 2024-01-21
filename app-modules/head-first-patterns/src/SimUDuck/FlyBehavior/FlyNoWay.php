<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\SimUDuck\FlyBehavior;

use Modules\HeadFirstPatterns\SimUDuck\Contracts\FlyBehavior;

final class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly!<br>";
    }
}
