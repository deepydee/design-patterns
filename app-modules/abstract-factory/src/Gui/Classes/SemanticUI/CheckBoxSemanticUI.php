<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Classes\SemanticUI;

use Modules\AbstractFactory\Gui\Contracts\CheckBox;

class CheckBoxSemanticUI implements CheckBox
{
    public function draw(): void
    {
        echo __CLASS__ . ' (CheckBox SemanticUI) <br>';
    }
}
