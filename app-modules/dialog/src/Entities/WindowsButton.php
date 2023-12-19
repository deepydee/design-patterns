<?php

declare(strict_types=1);

namespace Modules\Dialog\Entities;

use Modules\Dialog\Contracts\Button;

final class WindowsButton implements Button
{
    public function render(): string
    {
        return 'Here is a rendered windows button';
    }

    public function onClick(): string
    {
        return 'Action on Windows button clict';
    }
}
