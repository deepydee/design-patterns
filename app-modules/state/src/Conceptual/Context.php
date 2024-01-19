<?php

declare(strict_types=1);

namespace Modules\State\Conceptual;

use Modules\State\Conceptual\State;

/**
 * Контекст определяет интерфейс, представляющий интерес для клиентов. Он также
 * хранит ссылку на экземпляр подкласса Состояния, который отображает текущее
 * состояние Контекста.
 */
class Context
{
    /**
     * @var State Ссылка на текущее состояние Контекста.
     */
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * Контекст позволяет изменять объект Состояния во время выполнения.
     */
    public function transitionTo(State $state): void
    {
        echo 'Context: Transition to '.get_class($state).".<br>";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * Контекст делегирует часть своего поведения текущему объекту Состояния.
     */
    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}
