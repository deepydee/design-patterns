<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

class InterpreterContext
{
    private array $expressionStore = [];

    public function replace(Expression $expression, mixed $value): void
    {
        $this->expressionStore[$expression->getKey()] = $value;
    }

    public function lookup(Expression $expression): mixed
    {
        return $this->expressionStore[$expression->getKey()] ?? null;
    }
}
