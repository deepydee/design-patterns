<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Contracts;

use Modules\Decorator\Orders\Models\Order;

interface OrderUpdate
{
    public function run(Order $order, array $orderData): Order;
}
