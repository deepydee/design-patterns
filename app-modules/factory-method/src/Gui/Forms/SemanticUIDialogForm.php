<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Forms;

use Modules\FactoryMethod\Gui\Contracts\GuiFactory;
use Modules\FactoryMethod\Gui\Factories\SemanticUIFactory;

final class SemanticUIDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactory
    {
        return new SemanticUIFactory();
    }
}
