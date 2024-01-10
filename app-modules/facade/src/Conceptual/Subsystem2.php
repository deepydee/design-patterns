<?php

declare(strict_types=1);

namespace Modules\Facade\Conceptual;

/**
 * Подсистема может принимать запросы либо от фасада, либо от клиента напрямую.
 * В любом случае, для Подсистемы Фасад – это еще один клиент, и он не является
 * частью Подсистемы.
 */
class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Ready!<br>";
    }

    // ...

    public function operationZ(): string
    {
        return "Subsystem2: Go!<br>";
    }
}
