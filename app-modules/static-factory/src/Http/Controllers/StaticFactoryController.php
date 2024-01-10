<?php

namespace Modules\StaticFactory\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\StaticFactory\Enums\MessageType;
use Modules\StaticFactory\StaticFactory;

class StaticFactoryController extends Controller
{
    public function __invoke()
    {
        $appMailMessenger = StaticFactory::build(MessageType::Email);
        $appPhoneMessenger = StaticFactory::build(MessageType::Sms);

        $appMailMessenger->send();

        echo '<br>';

        $appPhoneMessenger->send();
    }
}
