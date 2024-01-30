<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Contracts;

interface GuiFactory
{
    public function buildButton(): Button;

    public function buildCheckBox(): CheckBox;
}
