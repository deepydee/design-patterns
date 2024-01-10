<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Factories;

use Modules\FactoryMethod\Gui\Classes\ButtonSemanticUI;
use Modules\FactoryMethod\Gui\Classes\CheckBoxSemanticUI;
use Modules\FactoryMethod\Gui\Contracts\Button;
use Modules\FactoryMethod\Gui\Contracts\CheckBox;
use Modules\FactoryMethod\Gui\Contracts\GuiFactory;

class SemanticUIFactory implements GuiFactory
{
    public function buildButton(): Button
    {
        return new ButtonSemanticUI();
    }

    public function buildCheckBox(): CheckBox
    {
        return new CheckBoxSemanticUI();
    }
}
