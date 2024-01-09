<?php

declare(strict_types=1);

namespace Modules\Strategy\Conceptual\Strategies;

use Modules\Strategy\Conceptual\Contracts\Strategy;

/**
 * Конкретные Стратегии реализуют алгоритм, следуя базовому интерфейсу
 * Стратегии. Этот интерфейс делает их взаимозаменяемыми в Контексте.
 */
final class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
