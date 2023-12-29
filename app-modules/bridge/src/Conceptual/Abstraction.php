<?php

declare(strict_types=1);

namespace Modules\Bridge\Conceptual;

use Modules\Bridge\Conceptual\Contracts\Implementation;

/**
 * Абстракция устанавливает интерфейс для «управляющей» части двух иерархий
 * классов. Она содержит ссылку на объект из иерархии Реализации и делегирует
 * ему всю настоящую работу.
 */
class Abstraction
{
    public function __construct(protected Implementation $implementation)
    {
    }

    public function operation(): string
    {
        return "Abstraction: Base operation with:<br>" .
            $this->implementation->operationImplementation();
    }
}
