<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Factories;

use Modules\FactoryMethod\Gui\Classes\ButtonBootstrap;
use Modules\FactoryMethod\Gui\Classes\CheckBoxBootstrap;
use Modules\FactoryMethod\Gui\Contracts\Button;
use Modules\FactoryMethod\Gui\Contracts\CheckBox;
use Modules\FactoryMethod\Gui\Contracts\GuiFactory;

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
