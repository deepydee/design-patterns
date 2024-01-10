<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Forms;

use Modules\FactoryMethod\Gui\Contracts\GuiFactory;
use Modules\FactoryMethod\Gui\Factories\BootstrapFactory;

final class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactory
    {
        return new BootstrapFactory();
    }
}
