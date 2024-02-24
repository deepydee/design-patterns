<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

class VariableExpression extends Expression
{
    public function __construct(
        private string $name,
        private mixed $val = null,
    ) {
    }

    public function interpret(InterpreterContext $context): void
    {
        if (! is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->vall = null;
        }
    }

    public function setValue(mixed $val): void
    {
        $this->val = $val;
    }

    public function getKey(): string
    {
        return $this->name;
    }
}
