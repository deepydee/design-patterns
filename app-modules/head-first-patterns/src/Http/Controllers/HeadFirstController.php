<?php

namespace Modules\HeadFirstPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\HeadFirstPatterns\Providers\SimUDuck\FlyBehavior\FlyRocketPowered;
use Modules\HeadFirstPatterns\Providers\SimUDuck\MallardDuck;
use Modules\HeadFirstPatterns\Providers\SimUDuck\ModelDuck;

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
