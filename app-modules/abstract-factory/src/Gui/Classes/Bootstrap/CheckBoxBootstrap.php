<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Classes\Bootstrap;

use Modules\AbstractFactory\Gui\Contracts\CheckBox;

class CheckBoxBootstrap implements CheckBox
{
    public function draw(): void
    {
        echo __CLASS__ . ' (CheckBox Bootstrap) <br>';
    }
}
