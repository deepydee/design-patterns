<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Contracts;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;

interface Subject
{
    public function registerObserver(Observer $observer): void;
    public function removeObserver(Observer $observer): void;

    /**
     * Этом метод вызывается для оповещения наблюдателей об изменении
     * состояния субъекта
     */
    public function notifyObservers(): void;
}
