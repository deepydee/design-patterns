<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Gui\Classes;

use Modules\FactoryMethod\Gui\Contracts\Button;

class ButtonSemanticUI implements Button
{
    public function draw(): void
    {
        echo __CLASS__ . ' (Button SemanticUI) <br>';
    }
}
