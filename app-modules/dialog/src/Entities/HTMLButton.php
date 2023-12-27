<?php

declare(strict_types=1);

namespace Modules\Dialog\Entities;

use Modules\Dialog\Contracts\Button;

final class HTMLButton implements Button
{
    public function render(): string
    {
        return 'Here is a rendered HTMLButton button';
    }

    public function onClick(): string
    {
        return 'Action on HTML button clict';
    }
}
