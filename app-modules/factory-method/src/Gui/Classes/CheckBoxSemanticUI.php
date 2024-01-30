<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Classes;

use Modules\FactoryMethod\Gui\Contracts\CheckBox;

class CheckBoxSemanticUI implements CheckBox
{
    public function draw(): void
    {
        echo __CLASS__.' (CheckBox SemanticUI) <br>';
    }
}
