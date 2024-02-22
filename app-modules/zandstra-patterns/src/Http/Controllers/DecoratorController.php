<?php

namespace Modules\ZandstraPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\ZandstraPatterns\Decorator\Request\AuthenticateRequest;
use Modules\ZandstraPatterns\Decorator\Request\LogRequest;
use Modules\ZandstraPatterns\Decorator\Request\MainProcess;
use Modules\ZandstraPatterns\Decorator\Request\RequestHelper;
use Modules\ZandstraPatterns\Decorator\Request\StructureRequest;
use Modules\ZandstraPatterns\Decorator\Tile\DiamondDecorator;
use Modules\ZandstraPatterns\Decorator\Tile\Inheritance\PollutedPlains;
use Modules\ZandstraPatterns\Decorator\Tile\Plains;
use Modules\ZandstraPatterns\Decorator\Tile\PollutedDecorator;

class DecoratorController extends Controller
{
    public function inheritance(): void
    {
        $tile = new PollutedPlains();
        echo 'Polluted Plains: '.$tile->getWealthFactor().'<br>';
    }

    public function tileDecorator(): void
    {
        $tile = new Plains();
        echo 'Plain Plains: '.$tile->getWealthFactor().'<br>';

        $tile = new DiamondDecorator($tile);
        echo 'Diamond Plains: '.$tile->getWealthFactor().'<br>';

        $tile = new PollutedDecorator($tile);
        echo 'Polluted Plains: '.$tile->getWealthFactor().'<br>';
    }

    public function request(): void
    {
        $process = new AuthenticateRequest(
            new StructureRequest(
                new LogRequest(
                    new MainProcess()
                )
            )
        );

        $process->process(new RequestHelper());
    }
}
