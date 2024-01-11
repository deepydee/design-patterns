<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders;

use Modules\Decorator\Orders\Classes\OrderUpdate;
use Modules\Decorator\Orders\Classes\OrderUpdateAdmin;
use Modules\Decorator\Orders\Classes\OrderUpdateWeb;
use Modules\Decorator\Orders\Contracts\OrderUpdate as OrderUpdateInterface;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorLogger;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorNotifierManagers;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorNotifierUsers;
use Modules\Decorator\Orders\Models\Order;

class DecoratorApp
{
    public function run(): void
    {
        $order = new Order();
        $orderData = [];
        $updateOrderObj = $this->getUpdateOrderObj();

        $updateOrderObj->run($order, $orderData);
    }

    private function getUpdateOrderObj(): OrderUpdateInterface
    {
        // return new OrderUpdateDecoratorLogger(new OrderUpdate());

        // $orderUpdateLogger = new OrderUpdateDecoratorLogger(new OrderUpdate());
        // $orderUpdateNotifierManagers = new OrderUpdateDecoratorNotifierManagers($orderUpdateLogger);
        // return new OrderUpdateDecoratorNotifierUsers($orderUpdateNotifierManagers);

        // return new OrderUpdateWeb();
        return new OrderUpdateAdmin();
    }
}
