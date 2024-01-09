<?php

namespace Modules\Delegation\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Delegation\RealWorld\AppMessenger;

class DelegationRealWorldController extends Controller
{
    public function __invoke(AppMessenger $messenger)
    {
        $messenger
            ->setSender('sender@ex.com')
            ->setRecipient('recipient@ex.com')
            ->setMessage('Hello World!')
            ->send();

        echo '<br>';

        $messenger
            ->toSms()
            ->setSender('+7904123456')
            ->setRecipient('+7905123445')
            ->setMessage('Hello World Sms!')
            ->send();

    }
}
