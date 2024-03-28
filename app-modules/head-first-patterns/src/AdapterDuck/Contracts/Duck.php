<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck\Contracts;

interface Duck
{
    public function quack(): void;

    public function fly(): void;
}
