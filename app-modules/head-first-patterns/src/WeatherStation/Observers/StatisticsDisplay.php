<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Observers;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\DisplayElement;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Subject;

final class StatisticsDisplay implements Observer, DisplayElement
{
    private float $maxTemp = 0.0;
    private float $minTemp = 200;
    private float $tempSum = 0.0;
    private int $numReadings = 0;
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
        $temp = $this->weatherData->getTemperature();

        $this->tempSum += $temp;
        $this->numReadings++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }

    /**
     * Метод display() просто выводит текущие значения температуры и влажности
     */
    public function display(): void
    {
        echo 'AVG/Max/Min temperature = ' .
        ($this->tempSum / $this->numReadings) . '/'
        . $this->maxTemp . '/' . $this->minTemp . '<br>';
    }
}
