<?php

declare(strict_types=1);

namespace Modules\Dialog\Entities;

use Modules\Dialog\Contracts\Button;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new HTMLButton();
    }
}
