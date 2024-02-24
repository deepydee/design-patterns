<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

abstract class OperatorExpression extends Expression
{
    public function __construct(
        protected Expression $lOp,
        protected Expression $rOp,
    ) {
    }

    public function interpret(InterpreterContext $context): void
    {
        $this->lOp->interpret($context);
        $this->rOp->interpret($context);

        $resL = $context->lookup($this->lOp);
        $resR = $context->lookup($this->rOp);

        $this->doInterpret($context, $resL, $resR);
    }

    abstract protected function doInterpret(
        InterpreterContext $context,
        mixed $resL,
        mixed $resR,
    ): void;
}
