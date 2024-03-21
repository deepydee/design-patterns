<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer\Observers;

use Modules\ZandstraPatterns\Observer\Login;

class LoginAnalytics extends LoginObserver
{
    public function doUpdate(Login $login): void
    {
        $status = $login->getStatus();

        echo "User: {$status[0][1]}<br>";
        echo "Status: {$status[0][0]}<br>";
        echo "IP: {$status[0][2]}<br>";
    }
}
