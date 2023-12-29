<?php

declare(strict_types=1);

namespace Modules\Bridge\Conceptual\Implementations;

use Modules\Bridge\Conceptual\Contracts\Implementation;

/**
 * Каждая Конкретная Реализация соответствует определённой платформе и реализует
 * интерфейс Реализации с использованием API этой платформы.
 */
class ConcreteImplementationB implements Implementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform B.<br>";
    }
}
