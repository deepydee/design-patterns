<?php

declare(strict_types=1);

namespace Modules\Bridge\Conceptual;

use Modules\Bridge\Conceptual\Abstraction;

/**
 * Можно расширить Абстракцию без изменения классов Реализации.
 */
class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:<br>" .
            $this->implementation->operationImplementation();
    }
}
