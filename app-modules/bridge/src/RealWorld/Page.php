<?php

declare(strict_types=1);

namespace Modules\Bridge\RealWorld;

use Modules\Bridge\RealWorld\Contracts\Renderer;

/**
 * Абстракция.
 */
abstract class Page
{
    /**
     * Обычно Абстракция инициализируется одним из объектов Реализации.
     */
    public function __construct(protected Renderer $renderer)
    {
    }

    /**
     * Паттерн Мост позволяет динамически заменять присоединённый объект
     * Реализации.
     */
    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    /**
     * Поведение «вида» остаётся абстрактным, так как оно предоставляется только
     * классами Конкретной Абстракции.
     */
    abstract public function view(): string;
}
