<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Factories;

use Modules\AbstractFactory\Gui\Classes\Bootstrap\ButtonBootstrap;
use Modules\AbstractFactory\Gui\Classes\Bootstrap\CheckBoxBootstrap;
use Modules\AbstractFactory\Gui\Contracts\Button;
use Modules\AbstractFactory\Gui\Contracts\CheckBox;
use Modules\AbstractFactory\Gui\Contracts\GuiFactory;

class BootstrapFactory implements GuiFactory
{
    public function buildButton(): Button
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBox
    {
        return new CheckBoxBootstrap();
    }
}
