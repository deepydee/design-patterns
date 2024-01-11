<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorAbstract;

class OrderUpdateDecoratorNotifierManagers extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        echo 'Notify managers<br>';
    }
}
