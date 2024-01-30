<?php

namespace Modules\Mediator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Mediator\RealWorld\Events;
use Modules\Mediator\RealWorld\Logger;
use Modules\Mediator\RealWorld\OnboardingNotification;
use Modules\Mediator\RealWorld\UserRepository;

class MediatorRealWorldController extends Controller
{
    public function __invoke(UserRepository $repository)
    {
        Events::getDispatcher()->attach($repository, 'facebook:update');

        $logger = new Logger(storage_path('app').'/log.txt');
        Events::getDispatcher()->attach($logger, '*');

        $onboarding = new OnboardingNotification('1@example.com');
        Events::getDispatcher()->attach($onboarding, 'users:created');

        $repository->initialize(storage_path('app').'/users.csv');

        $user = $repository->createUser([
            'name' => 'John Smith',
            'email' => 'john99@example.com',
        ]);

        $user->delete();
    }
}
