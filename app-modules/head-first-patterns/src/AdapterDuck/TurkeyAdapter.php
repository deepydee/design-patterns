<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck;

use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Duck;
use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Turkey;

final class TurkeyAdapter implements Duck
{
    public function __construct(private Turkey $turkey)
    {
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
