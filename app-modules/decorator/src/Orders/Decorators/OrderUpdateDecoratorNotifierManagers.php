<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

class OrderUpdateDecoratorNotifierManagers extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        echo 'Notify managers<br>';
    }
}
