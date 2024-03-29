<?php

declare(strict_types=1);

namespace Modules\Strategy\RealWorld\Strategies;

use Modules\Strategy\RealWorld\Contracts\PaymentMethod;
use Modules\Strategy\RealWorld\Order;

/**
 * Эта Конкретная Стратегия предоставляет форму оплаты и проверяет результаты
 * платежей PayPal.
 */
final class PayPalPayment implements PaymentMethod
{
    public function getPaymentForm(Order $order): string
    {
        $returnURL = 'https://our-website.com/'.
            "order/{$order->id}/payment/paypal/return";

        return <<<FORM
<form action="https://paypal.com/payment" method="POST">
    <input type="hidden" id="email" value="{$order->email}">
    <input type="hidden" id="total" value="{$order->total}">
    <input type="hidden" id="returnURL" value="$returnURL">
    <input type="submit" value="Pay on PayPal">
</form>
FORM;
    }

    public function validateReturn(Order $order, array $data): bool
    {
        echo 'PayPalPayment: ...validating... ';

        // ...

        echo 'Done!<br>';

        return true;
    }
}
