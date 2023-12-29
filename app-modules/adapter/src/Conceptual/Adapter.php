<?php

declare(strict_types=1);

namespace Modules\Adapter\Conceptual;

use Modules\Adapter\Conceptual\Adaptee;
use Modules\Adapter\Conceptual\Target;

/**
 * Адаптер делает интерфейс Адаптируемого класса совместимым с целевым
 * интерфейсом.
 */
class Adapter extends Target
{
    public function __construct(private Adaptee $adaptee)
    {
    }

    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}
