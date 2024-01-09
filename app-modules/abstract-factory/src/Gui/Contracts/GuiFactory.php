<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Contracts;

use Modules\AbstractFactory\Gui\Contracts\Button;
use Modules\AbstractFactory\Gui\Contracts\CheckBox;

interface GuiFactory
{
    public function buildButton(): Button;
    public function buildCheckBox(): CheckBox;
}
