<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

abstract class Expression
{
    private static int $keyCount = 0;
    private string $key;

    abstract public function interpret(InterpreterContext $context): void;

    public function getKey(): string
    {
        if (! isset($this->key)) {
            $this->key = (string) static::$keyCount++;
        }

        return $this->key;
    }
}
