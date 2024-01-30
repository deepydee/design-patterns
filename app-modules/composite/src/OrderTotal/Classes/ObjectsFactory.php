<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Classes;

use Illuminate\Support\Arr;
use Modules\Composite\OrderTotal\Models\Ingredient;
use Modules\Composite\OrderTotal\Models\Order;
use Modules\Composite\OrderTotal\Models\Product;

class ObjectsFactory
{
    public function createIngredients(int $count): array
    {
        $ingredients = [];

        for ($i = 0; $i < $count; $i++) {
            $ingredients[] = $this->createIngredient($i);
        }

        return $ingredients;
    }

    private function createIngredient(int $id): Ingredient
    {
        $obj = new Ingredient();
        $obj->id = $id;
        $obj->name = fake()->colorName();

        return $obj;
    }

    public function createProducts(int $count, array $ingredients): array
    {
        $products = [];

        for ($i = 0; $i < $count; $i++) {
            $productIngredients = Arr::random($ingredients, rand(2, 3));

            $products[] = $this->createProduct($i, $productIngredients);
        }

        return $products;
    }

    private function createProduct(int $id, array $ingredients): Product
    {
        $obj = new Product();
        $obj->id = $id;
        $obj->name = fake()->company();

        foreach ($ingredients as $ingredient) {
            $obj->setChildItem($ingredient);
        }

        return $obj;
    }

    public function createOrders(int $count, array $products): array
    {
        $orders = [];

        for ($i = 0; $i < $count; $i++) {
            $orderProducts = Arr::random($products, rand(1, 3));

            $orders[] = $this->createOrder($i, $orderProducts);
        }

        return $orders;
    }

    private function createOrder(int $id, array $children): Order
    {
        $obj = new Order();
        $obj->id = $id;
        $obj->name = fake()->company();

        foreach ($children as $ingredient) {
            $obj->setChildItem($ingredient);
        }

        return $obj;
    }
}
