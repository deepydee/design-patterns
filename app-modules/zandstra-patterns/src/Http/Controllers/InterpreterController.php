<?php

namespace Modules\ZandstraPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\ZandstraPatterns\Interpreter\BooleanEqualsExpression;
use Modules\ZandstraPatterns\Interpreter\BooleanOrExpression;
use Modules\ZandstraPatterns\Interpreter\InterpreterContext;

use Modules\ZandstraPatterns\Interpreter\LiteralExpression;
use Modules\ZandstraPatterns\Interpreter\VariableExpression;


class InterpreterController extends Controller
{
    public function interpreter(): void
    {
        $context = new InterpreterContext();
        $literal = new LiteralExpression('four');

        $literal->interpret($context);
        echo $context->lookup($literal);

        echo '<br>';

        $context = new InterpreterContext();
        $myvar = new VariableExpression('input', 'four');
        $myvar->interpret($context);
        echo $context->lookup($myvar);

        echo '<br>';

        $newvar = new VariableExpression('input');
        $newvar->interpret($context);
        echo $context->lookup($newvar);

        echo '<br>';

        $myvar->setValue('five');
        $myvar->interpret($context);
        echo $context->lookup($myvar) . ' should be five.<br>';
        echo $context->lookup($newvar) . ' should be five.<br>';

        echo '<br>';

        $context = new InterpreterContext();
        $input = new VariableExpression('input');
        $statement = new BooleanOrExpression(
            new BooleanEqualsExpression(
                $input,
                new LiteralExpression('four')
            ),
            new BooleanEqualsExpression(
                $input,
                new LiteralExpression('4')
            )
        );

        foreach (['four', '4', '52'] as $val) {
            $input->setValue($val);
            echo 'input is ' . $val .' <br>';
            $statement->interpret($context);

            if ($context->lookup($statement)) {
                echo 'You are right.<br>';
            } else {
                echo 'You are wrong.';
            }
        }
    }
}
