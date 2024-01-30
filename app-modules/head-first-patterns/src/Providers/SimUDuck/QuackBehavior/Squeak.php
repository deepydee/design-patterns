<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Providers\SimUDuck\QuackBehavior;

use Modules\HeadFirstPatterns\Providers\SimUDuck\Contracts\QuackBehavior;

final class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo 'Squeak<br>';
    }
}
