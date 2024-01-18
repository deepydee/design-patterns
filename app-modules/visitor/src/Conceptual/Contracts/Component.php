<?php

declare(strict_types=1);

namespace Modules\Visitor\Conceptual\Contracts;

use Modules\Visitor\Conceptual\Contracts\Visitor;

/**
 * Интерфейс Компонента объявляет метод accept, который в качестве аргумента
 * может получать любой объект, реализующий интерфейс посетителя.
 */
interface Component
{
    public function accept(Visitor $visitor): void;
}
