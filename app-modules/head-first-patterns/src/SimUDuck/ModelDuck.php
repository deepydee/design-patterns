<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\SimUDuck;

use Modules\HeadFirstPatterns\SimUDuck\FlyBehavior\FlyNoWay;
use Modules\HeadFirstPatterns\SimUDuck\QuackBehavior\Quack;

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
