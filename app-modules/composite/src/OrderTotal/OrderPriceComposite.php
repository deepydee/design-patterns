<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal;

use Modules\Composite\OrderTotal\Classes\ObjectsFactory;
use Modules\Composite\OrderTotal\Contracts\Composite;
use Symfony\Component\HttpKernel\EventListener\DumpListener;

class OrderPriceComposite
{
    private int $ingredientsCnt = 10;
    private array $ingredients = [];

    private int $productsCnt = 5;
    private array $products = [];

    private int $ordersCnt = 2;
    private array $orders = [];

    public function __construct(private ObjectsFactory $factory)
    {
    }

    public function run(): void
    {
        $this->initObjects();
        $this->calcPrices();
    }

    private function initObjects(): void
    {
        $this->ingredients = $this->factory->createIngredients($this->ingredientsCnt);
        $this->products = $this->factory->createProducts($this->productsCnt, $this->ingredients);
        $this->orders = $this->factory->createOrders($this->ordersCnt, $this->products);
    }

    private function calcPrices(): void
    {
        $result = [];

        /** @var Composite $order */
        foreach ($this->orders as $order) {
            $result[] = [
                'order_id' => $order->id,
                'order_price' => $order->calcPrice(),
            ];
        }

        echo "Result: <pre>";
        print_r($result);
        echo "</pre>";

        echo "Orders: <pre>";
        dump($this->orders);
        echo "</pre>";
    }
}
