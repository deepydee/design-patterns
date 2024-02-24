<?php

namespace Modules\ZandstraPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\ZandstraPatterns\Composite\Archer;
use Modules\ZandstraPatterns\Composite\Army;
use Modules\ZandstraPatterns\Composite\LaserCannonUnit;

class CompositeController extends Controller
{
    public function composite(): void
    {
        $main_army = new Army() ;

        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCannonUnit());

        $sub_army = new Army();
        $sub_army->addUnit(new Archer());
        $sub_army->addUnit(new Archer());
        $sub_army->addUnit(new Archer());

        $main_army->addUnit($sub_army);

        dump($main_army->bombardStrength());
    }
}
