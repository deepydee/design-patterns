<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Factories;

use Modules\AbstractFactory\Gui\Classes\SemanticUI\ButtonSemanticUI;
use Modules\AbstractFactory\Gui\Classes\SemanticUI\CheckBoxSemanticUI;
use Modules\AbstractFactory\Gui\Contracts\Button;
use Modules\AbstractFactory\Gui\Contracts\CheckBox;
use Modules\AbstractFactory\Gui\Contracts\GuiFactory;

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
