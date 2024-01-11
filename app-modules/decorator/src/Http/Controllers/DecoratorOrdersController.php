<?php

namespace Modules\Decorator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Decorator\Orders\DecoratorApp;

class DecoratorOrdersController extends Controller
{
    public function __invoke(DecoratorApp $app)
    {
        $app->run();
    }
}
