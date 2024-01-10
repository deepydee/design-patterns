<?php

declare(strict_types=1);

namespace Modules\Adapter\RealWorld;

use Modules\Adapter\RealWorld\Contracts\Notification;
use Modules\Adapter\RealWorld\SlackApi;

/**
 * Адаптер – класс, который связывает Целевой интерфейс и Адаптируемый класс.
 * Это позволяет приложению использовать Slack API для отправки уведомлений.
 */
class SlackNotification implements Notification
{
    public function __construct(private SlackApi $slack, private string $chatId)
    {
    }

    /**
     * Адаптер способен адаптировать интерфейсы и преобразовывать входные данные
     * в формат, необходимый Адаптируемому классу.
     */
    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }

    /**
     * Можно вызывать другие полезные методы новой библиотеки
     */
    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->slack, $name)) {
            return call_user_func_array([$this->slack, $name], $arguments);
        }

        throw new \Exception('Call to undefined method SlackApi::' . $name . '()');
    }
}
