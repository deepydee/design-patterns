<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders\Classes;

use Modules\Decorator\Orders\Contracts\OrderUpdate as OrderUpdateInterface;
use Modules\Decorator\Orders\Models\Order;

final class OrderUpdate implements OrderUpdateInterface
{

    public function run(Order $order, array $orderData): Order
    {
        echo 'Base update<br>';

        return $order;
    }
}
