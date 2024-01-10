<?php

declare(strict_types=1);

namespace Modules\Strategy\Conceptual\Strategies;

use Modules\Strategy\Conceptual\Contracts\Strategy;

/**
 * Конкретные Стратегии реализуют алгоритм, следуя базовому интерфейсу
 * Стратегии. Этот интерфейс делает их взаимозаменяемыми в Контексте.
 */
final class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
