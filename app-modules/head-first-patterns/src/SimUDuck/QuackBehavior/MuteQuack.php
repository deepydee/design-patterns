<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\SimUDuck\QuackBehavior;

use Modules\HeadFirstPatterns\SimUDuck\Contracts\QuackBehavior;

final class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<< Silence >><br>";
    }
}
