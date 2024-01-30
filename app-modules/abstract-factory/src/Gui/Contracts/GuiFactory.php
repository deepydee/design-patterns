<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Contracts;

interface GuiFactory
{
    public function buildButton(): Button;

    public function buildCheckBox(): CheckBox;
}
