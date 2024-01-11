<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Classes;

use Modules\Decorator\Orders\Classes\OrderUpdate;
use Modules\Decorator\Orders\Contracts\OrderUpdate as OrderUpdateInterface;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorLogger;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorNotifierUsers;
use Modules\Decorator\Orders\Models\Order;

final class OrderUpdateAdmin implements OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order
    {
        $updateDecorators = $this->createStackDecorators();

        return $updateDecorators->run($order, $orderData);
    }

    private function createStackDecorators(): OrderUpdateInterface
    {
        $orderUpdateLogger = new OrderUpdateDecoratorLogger(new OrderUpdate());

        return new OrderUpdateDecoratorNotifierUsers($orderUpdateLogger);
    }
}
