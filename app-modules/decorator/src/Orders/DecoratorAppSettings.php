<?php

declare(strict_types=1);

namespace Modules\Decorator\Orders;

use Illuminate\Support\Collection;
use Modules\Decorator\Orders\Classes\OrderUpdate;
use Modules\Decorator\Orders\Contracts\OrderUpdate as OrderUpdateInterface;
use Modules\Decorator\Orders\Models\Order;

class DecoratorAppSettings
{
    public function run(): void
    {
        $settings = $this->getEnabledSettings();
        $updateOrderObj = $this->createUpdater($settings);

        $order = new Order();
        $orderData = [];

        $updateOrderObj->run($order, $orderData);
    }

    private function getEnabledSettings(): Collection
    {
        $settings = config('decorator.fromWeb', []);

        return collect($settings)->where('enebled', 1);
    }

    private function createUpdater(Collection $settings): OrderUpdateInterface
    {
        $updateOrderObj = new OrderUpdate();

        $settings->each(
            function($setting) use (&$updateOrderObj) {
                $className = $setting['decorator_class'];

                $updateOrderObj = (new $className($updateOrderObj));
            }
        );

        return $updateOrderObj;
    }
}
