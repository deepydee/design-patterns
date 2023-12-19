<?php

declare(strict_types=1);

namespace Modules\Dialog\Entities;

use Modules\Dialog\Contracts\Button;

abstract class Dialog
{
    public function render(): string
    {
        return 'Base dialog';
    }

    abstract public function createButton(): Button;
}
