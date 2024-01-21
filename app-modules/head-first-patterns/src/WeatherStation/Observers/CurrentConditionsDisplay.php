<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Observers;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\DisplayElement;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Subject;

final class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature = 0.0;
    private float $humidity = 0.0;
    private Subject $weatherData;

    /**
     * Конструктору передается объект WeatherData, который используется для
     * регистрации элемента в качестве наблюдателя
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    /**
     * При вызове update() мы сохраняем значения температуры и влажности,
     * после чего вызываем display()
     */
    public function update(): void
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    /**
     * Метод display() просто выводит текущие значения температуры и влажности
     */
    public function display(): void
    {
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity<br>";
    }
}
