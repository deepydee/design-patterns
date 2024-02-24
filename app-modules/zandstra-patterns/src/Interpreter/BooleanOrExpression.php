<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Interpreter;

class BooleanOrExpression extends OperatorExpression
{
    protected function doInterpret(
        InterpreterContext $context,
        mixed $resL,
        mixed $resR,
    ): void {
        $context->replace($this, $resL || $resR);
    }
}
