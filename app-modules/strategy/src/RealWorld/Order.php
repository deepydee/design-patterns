<?php

declare(strict_types=1);

namespace Modules\Strategy\RealWorld;

/**
 * Упрощенное представление класса Заказа.
 */
class Order
{
    public string $email;
    public float $total;

    /**
     * Для простоты, мы будем хранить все созданные заказы здесь...
     */
    private static array $orders = [];

    public int $id;
    public string $status;

    /**
     * Конструктор Заказа присваивает значения полям заказа. Чтобы всё было
     * просто, нет никакой проверки.
     */
    public function __construct(array $attributes)
    {
        $this->id = count(static::$orders);
        $this->status = "new";

        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }

        static::$orders[$this->id] = $this;
    }

    /**
     * ...и получать к ним доступ отсюда.
     */
    public static function get(?int $orderId = null)
    {
        if (! $orderId) {
            return static::$orders;
        }

        return static::$orders[$orderId];
    }

    /**
     * Метод позвонить при оплате заказа.
     */
    public function complete(): void
    {
        $this->status = "completed";
        echo "Order: #{$this->id} is now {$this->status}.";
    }
}
