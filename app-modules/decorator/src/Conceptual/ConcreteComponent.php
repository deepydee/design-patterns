<?php

declare(strict_types=1);

namespace Modules\Decorator\Conceptual;

use Modules\Decorator\Conceptual\Contracts\Component;

/**
 * Конкретные Компоненты предоставляют реализации поведения по умолчанию. Может
 * быть несколько вариаций этих классов.
 */
class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return 'ConcreteComponent';
    }
}
