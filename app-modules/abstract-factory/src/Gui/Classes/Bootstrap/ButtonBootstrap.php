<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Classes\Bootstrap;

use Modules\AbstractFactory\Gui\Contracts\Button;

class ButtonBootstrap implements Button
{
    public function draw(): void
    {
        echo __CLASS__ . ' (Button Bootstrap) <br>';
    }
}
