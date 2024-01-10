<?php

declare(strict_types=1);

namespace Modules\Decorator\Conceptual;

use Modules\Decorator\Conceptual\Contracts\Component;

/**
 * Базовый класс Декоратора следует тому же интерфейсу, что и другие компоненты.
 * Основная цель этого класса - определить интерфейс обёртки для всех конкретных
 * декораторов. Реализация кода обёртки по умолчанию может включать в себя поле
 * для хранения завёрнутого компонента и средства его инициализации.
 */
class Decorator implements Component
{
    public function __construct(protected Component $component)
    {
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}
