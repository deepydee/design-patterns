<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorAbstract;

class OrderUpdateDecoratorLogger extends OrderUpdateDecoratorAbstract
{
    protected function actionBefore(): void
    {
        echo 'Log Before<br>';
    }

    protected function actionAfter(): void
    {
        echo 'Log After<br>';
    }
}
