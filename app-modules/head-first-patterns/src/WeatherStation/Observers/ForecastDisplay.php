<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Observers;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\DisplayElement;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Subject;

final class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure = 0.0;

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
    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
        $this->display();
    }

    /**
     * Метод display() просто выводит текущие значения температуры и влажности
     */
    public function display(): void
    {
        echo "Forecast: ";

        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!<br>";
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo "More of the same<br>";
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo "Watch out for cooler, rainy weather<br>";
        }
    }
}
