<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Providers\SimUDuck;

use Modules\HeadFirstPatterns\Providers\SimUDuck\FlyBehavior\FlyWithWings;
use Modules\HeadFirstPatterns\Providers\SimUDuck\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a real Mallard duck<br>";
    }
}
