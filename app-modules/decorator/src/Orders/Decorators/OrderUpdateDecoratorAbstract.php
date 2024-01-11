<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Decorators;

use Modules\Decorator\Orders\Contracts\OrderUpdate;
use Modules\Decorator\Orders\Models\Order;

abstract class OrderUpdateDecoratorAbstract implements OrderUpdate
{
    public function __construct(protected OrderUpdate $decoratedObject)
    {
    }

    public function run(Order $order, array $orderData): Order
    {
        $this->actionBefore();
        $this->actionMain($order, $orderData);
        $this->actionAfter();

        return $order;
    }

    protected function actionBefore(): void
    {
    }

    protected function actionMain(Order $order, array $orderData): Order
    {
        return $this->decoratedObject->run($order, $orderData);
    }

    protected function actionAfter(): void
    {
    }
}
