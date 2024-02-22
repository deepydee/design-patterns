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
        $archer = new Archer();
        $laserCannonUnit = new LaserCannonUnit();
        $army = new Army();

        $army
            ->addUnit($archer)
            ->addUnit($laserCannonUnit);

        dump($army->bombardStrength());
    }
}
