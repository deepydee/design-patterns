<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Contracts;

interface Subject
{
    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    /**
     * Этом метод вызывается для оповещения наблюдателей об изменении
     * состояния субъекта
     */
    public function notifyObservers(): void;

    public function getTemperature(): float;

    public function getHumidity(): float;

    public function getPressure(): float;
}
