<?php

declare(strict_types=1);

namespace Modules\Mediator\RealWorld;

use Modules\Mediator\RealWorld\Contracts\Observer;

/**
 * Класс Диспетчера Событий выполняет функции Посредника и содержит логику
 * подписки и уведомлений. Хотя классический Посредник часто зависит от
 * конкретных классов компонентов, этот привязан только к их абстрактным
 * интерфейсам.
 *
 * Достичь слабой связанности между компонентами можно благодаря особому способу
 * установления связей между ними. Компоненты сами могут подписаться на
 * интересующие их конкретные события через интерфейс подписки Посредника.
 *
 * Обратите внимание, что мы не можем использовать здесь встроенные в PHP
 * интерфейсы Subject/Observer, так как они не дадут нам реализовать расширенные
 * методы подписки и оповещений.
 */
class EventDispatcher
{
    private array $observers = [];

    public function __construct()
    {
        // Специальная группа событий для наблюдателей, которые хотят слушать
        // все события.
        $this->observers['*'] = [];
    }

    private function initEventGroup(string &$event = '*'): void
    {
        if (! isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = '*'): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers['*'];

        return array_merge($group, $all);
    }

    public function attach(Observer $observer, string $event = '*'): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(Observer $observer, string $event = '*'): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function trigger(string $event, object $emitter, $data = null): void
    {
        echo "EventDispatcher: Broadcasting the '$event' event.<br>";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}
