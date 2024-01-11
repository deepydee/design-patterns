<?php

namespace Modules\Decorator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Decorator\Orders\DecoratorApp;
use Modules\Decorator\Orders\DecoratorAppSettings;

class DecoratorOrdersController extends Controller
{
    public function __invoke(DecoratorApp $app, DecoratorAppSettings $appSettings)
    {
        // $app->run();

        $appSettings->run();
    }
}
