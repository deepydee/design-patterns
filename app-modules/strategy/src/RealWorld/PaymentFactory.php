<?php

declare(strict_types=1);

namespace Modules\Strategy\RealWorld;

use Modules\Strategy\RealWorld\Contracts\PaymentMethod;
use Modules\Strategy\RealWorld\Strategies\CreditCardPayment;
use Modules\Strategy\RealWorld\Strategies\PayPalPayment;

/**
 * Этот класс помогает создать правильный объект стратегии для обработки
 * платежа.
 */
class PaymentFactory
{
    /**
     * Получаем способ оплаты по его ID.
     *
     * @throws \Exception
     */
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        return match ($id) {
            'cc' => new CreditCardPayment(),
            'paypal' => new PayPalPayment(),
            default => throw new \Exception('Unknown Payment Method'),
        };
    }
}
