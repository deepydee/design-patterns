<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Classes;

use Modules\FactoryMethod\Gui\Contracts\Button;

class ButtonBootstrap implements Button
{
    public function draw(): void
    {
        echo __CLASS__.' (Button Bootstrap) <br>';
    }
}
