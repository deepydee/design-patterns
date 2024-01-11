<?php

namespace Modules\Composite\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Composite\OrderTotal\OrderPriceComposite;

class CompositeOrdersController extends Controller
{
    public function __invoke(OrderPriceComposite $composite)
    {
        $composite->run();
    }
}
