<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui\Classes\SemanticUI;

use Modules\AbstractFactory\Gui\Contracts\Button;

class ButtonSemanticUI implements Button
{
    public function draw(): void
    {
        echo __CLASS__ . ' (Button SemanticUI) <br>';
    }
}
