<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Contracts;

use Modules\FactoryMethod\Gui\Contracts\Button;
use Modules\FactoryMethod\Gui\Contracts\CheckBox;

interface GuiFactory
{
    public function buildButton(): Button;
    public function buildCheckBox(): CheckBox;
}
