<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Conceptual\Contracts;

/**
 * Интерфейс Продукта объявляет операции, которые должны выполнять все
 * конкретные продукты.
 */
interface Product
{
    public function operation(): string;
}
