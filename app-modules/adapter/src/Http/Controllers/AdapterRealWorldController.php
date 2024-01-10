<?php

declare(strict_types=1);

namespace Modules\Adapter\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Adapter\RealWorld\Contracts\Notification;
use Modules\Adapter\RealWorld\EmailNotification;
use Modules\Adapter\RealWorld\SlackApi;
use Modules\Adapter\RealWorld\SlackNotification;

/**
 * Паттерн Адаптер
 *
 * Назначение: Позволяет объектам с несовместимыми интерфейсами работать вместе.
 *
 * Пример: Паттерн Адаптер позволяет использовать сторонние или устаревшие
 * классы, даже если они несовместимы с основной частью кода. Например, вместо
 * того, чтобы переписывать интерфейс уведомлений вашего приложения для
 * поддержки каждого стороннего сервиса вроде Slack, Facebook, SMS и прочих, вы
 * создаёте под эти сервисы набор специальных обёрток, которые приводят вызовы
 * из приложения к требуемым сторонними классами интерфейсу и формату.
 */
class AdapterRealWorldController extends Controller
{
    public function __invoke()
    {
        echo "Client code is designed correctly and works with email notifications:<br>";
        $notification = new EmailNotification('developers@example.com');
        $this->clientCode($notification);
        echo "<br><br>";

        echo "The same client code can work with other classes via adapter:<br>";
        $slackApi = new SlackApi(login: 'example.com', apiKey: 'XXXXXXXX');
        $notification = new SlackNotification(slack: $slackApi, chatId: 'Example.com Developers');
        $this->clientCode($notification);
    }

    /**
     * Клиентский код работает с классами, которые следуют Целевому интерфейсу.
     */
    private function clientCode(Notification $notification)
    {
        // ...

        echo $notification->send('Website is down!',
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> ".
            'Our website is not responding. Call admins and bring it up!');

        // ...
    }
}
