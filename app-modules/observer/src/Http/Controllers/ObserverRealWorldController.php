<?php

namespace Modules\Observer\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Observer\RealWorld\Logger;
use Modules\Observer\RealWorld\OnboardingNotification;
use Modules\Observer\RealWorld\UserRepository;

class ObserverRealWorldController extends Controller
{
    public function __invoke(UserRepository $userRepository)
    {
        $userRepository->attach(new Logger(__DIR__ . "/log.txt"), "*");
        $userRepository->attach(new OnboardingNotification("1@example.com"), "users:created");

        $userRepository->initialize(storage_path('app') . '/users.csv');

        $user = $userRepository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $userRepository->deleteUser($user);
    }
}
