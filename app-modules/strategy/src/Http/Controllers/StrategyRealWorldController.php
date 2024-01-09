<?php

namespace Modules\Strategy\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Strategy\RealWorld\OrderController;

/**
 * Паттерн Стратегия
 *
 * Назначение: Определяет семейство схожих алгоритмов и помещает каждый из них в
 * собственный класс, после чего алгоритмы можно взаимозаменять прямо во время
 * исполнения программы.
 *
 * Пример: В этом примере паттерн Стратегия используется для представления
 * способов оплаты в приложении электронной коммерции.
 *
 * Каждый способ оплаты может отображать форму оплаты для сбора надлежащих
 * платёжных реквизитов пользователя и отправки его в компанию по обработке
 * платежей. После того, как компания по обработке платежей перенаправляет
 * пользователя обратно на сайт, метод оплаты проверяет возвращаемые параметры и
 * помогает решить, был ли заказ завершён.
 */
class StrategyRealWorldController extends Controller
{
    public function __invoke(OrderController $controller)
    {
        echo "Client: Let's create some orders<br>";

        $controller->post('/orders', [
            'email' => 'me@example.com',
            'product' => 'ABC Cat food (XL)',
            'total' => 9.95,
        ]);

        $controller->post('/orders', [
            'email' => 'me@example.com',
            'product' => 'XYZ Cat litter (XXL)',
            'total' => 19.95,
        ]);

        echo "<br>Client: List my orders, please<br>";

        $controller->get('/orders');

        echo "<br>Client: I'd like to pay for the second, show me the payment form<br>";

        $controller->get('/order/1/payment/paypal');

        echo "<br>Client: ...pushes the Pay button...<br>";
        echo "<br>Client: Oh, I'm redirected to the PayPal.<br>";
        echo "<br>Client: ...pays on the PayPal...<br>";
        echo "<br>Client: Alright, I'm back with you, guys.<br>";

        $controller->get('/order/1/payment/paypal/return'.
            '?key=c55a3964833a4b0fa4469ea94a057152&success=true&total=19.95');
    }
}
