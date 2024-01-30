<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Providers\SimUDuck;

use Modules\HeadFirstPatterns\Providers\SimUDuck\FlyBehavior\FlyNoWay;
use Modules\HeadFirstPatterns\Providers\SimUDuck\QuackBehavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo 'I’m a model duck<br>';
    }
}
