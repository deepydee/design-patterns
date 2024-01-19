<?php

declare(strict_types=1);

namespace Modules\Mediator\Conceptual\Components;

use Modules\Mediator\Conceptual\Contracts\Mediator;

/**
 * Базовый Компонент обеспечивает базовую функциональность хранения экземпляра
 * посредника внутри объектов компонентов.
 */
class BaseComponent
{
    public function __construct(protected ?Mediator $mediator = null)
    {
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}
