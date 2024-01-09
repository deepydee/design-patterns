<?php

declare(strict_types=1);

namespace Modules\Strategy\Conceptual;

use Modules\Strategy\Conceptual\Contracts\Strategy;

/**
 * Контекст определяет интерфейс, представляющий интерес для клиентов.
 */
class Context
{
    public function __construct(private Strategy $strategy)
    {
    }

    /**
     * Обычно Контекст позволяет заменить объект Стратегии во время выполнения.
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Вместо того, чтобы самостоятельно реализовывать множественные версии
     * алгоритма, Контекст делегирует некоторую работу объекту Стратегии.
     */
    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy (not sure how it'll do it)<br>";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "<br>";

        // ...
    }
}
