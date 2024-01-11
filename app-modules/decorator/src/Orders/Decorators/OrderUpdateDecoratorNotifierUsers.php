<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorAbstract;

class OrderUpdateDecoratorNotifierUsers extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        echo 'Notify users<br>';
    }
}
