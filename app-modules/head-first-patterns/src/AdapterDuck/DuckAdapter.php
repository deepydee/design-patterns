<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\AdapterDuck;

use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Duck;
use Modules\HeadFirstPatterns\AdapterDuck\Contracts\Turkey;

final class DuckAdapter implements Turkey
{
    public function __construct(private Duck $duck)
    {
    }

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        $this->duck->fly();
    }
}
