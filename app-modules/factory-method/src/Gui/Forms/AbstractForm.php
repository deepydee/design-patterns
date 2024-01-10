<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Forms;

use Modules\FactoryMethod\Gui\Contracts\Form;
use Modules\FactoryMethod\Gui\Contracts\GuiFactory;

abstract class AbstractForm implements Form
{
    /**
     * Рисуем форму
     */
    public function render(): void
    {
        $guiKit = $this->createGuiKit();
        $guiKit->buildButton()->draw();
        $guiKit->buildCheckBox()->draw();
    }

    /**
     * Получаем инструментарий для рисования объектов формы
     */
    abstract function createGuiKit(): GuiFactory;
}
