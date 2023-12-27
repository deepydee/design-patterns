<?php

declare(strict_types=1);

namespace Modules\Dialog\Contracts;

interface Button
{
    public function render(): string;
    public function onClick(): string;
}
