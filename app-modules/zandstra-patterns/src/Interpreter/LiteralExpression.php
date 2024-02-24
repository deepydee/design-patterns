<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

class LiteralExpression extends Expression
{
    public function __construct(private mixed $value)
    {
    }

    public function interpret(InterpreterContext $context): void
    {
        $context->replace($this, $this->value);
    }
}
