<?php

namespace Modules\Command\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Command\RealWorld\Commands\IMDBGenresScrapingCommand;
use Modules\Command\RealWorld\Queue;

class CommandRealWorldController extends Controller
{
    public function __invoke()
    {
        $queue = Queue::get();

        if ($queue->isEmpty()) {
            $queue->add(new IMDBGenresScrapingCommand());
        }

        $queue->work();
    }
}
