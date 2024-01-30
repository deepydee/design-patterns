<?php

declare(strict_types=1);

namespace Modules\Dialog\Entities;

use Modules\Dialog\Contracts\Button;

class WindowDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }
}
