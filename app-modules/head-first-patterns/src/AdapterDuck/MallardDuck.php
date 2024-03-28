<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck;

use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Duck;

final class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo 'Quack';
    }

    public function fly(): void
    {
        echo 'I\'m flying';
    }
}
