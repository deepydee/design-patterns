<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

class OrderUpdateDecoratorNotifierUsers extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        echo 'Notify users<br>';
    }
}
