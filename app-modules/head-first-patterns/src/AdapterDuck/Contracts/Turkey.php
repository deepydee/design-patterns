<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck\Contracts;

interface Turkey
{
    public function gobble(): void;

    public function fly(): void;
}
