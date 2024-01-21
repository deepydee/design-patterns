<?php

namespace Modules\HeadFirstPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\HeadFirstPatterns\SimUDuck\FlyBehavior\FlyRocketPowered;
use Modules\HeadFirstPatterns\SimUDuck\MallardDuck;
use Modules\HeadFirstPatterns\SimUDuck\ModelDuck;

class HeadFirstController extends Controller
{
    public function simUDuck(MallardDuck $mallardDuck, ModelDuck $modelDuck)
    {
        $mallardDuck->display();
        $mallardDuck->performFly();
        $mallardDuck->performQuack();

        echo '<br>';

        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        $modelDuck->performFly();
        $modelDuck->performQuack();
    }
}
