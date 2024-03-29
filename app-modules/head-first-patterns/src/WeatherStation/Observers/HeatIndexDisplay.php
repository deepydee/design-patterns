<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Observers;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\DisplayElement;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Subject;

final class HeatIndexDisplay implements DisplayElement, Observer
{
    private float $heatIndex = 0.0;

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
        $humidity = $this->weatherData->getHumidity();
        $this->heatIndex = $this->computeHeatIndex($temp, $humidity);
        $this->display();
    }

    /**
     * Метод display() просто выводит текущие значения температуры и влажности
     */
    public function display(): void
    {
        echo "Heat index is: {$this->heatIndex}<br>";
    }

    private function computeHeatIndex(float $t, float $rh): float
    {
        $index = (float) (16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh)
        + (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh))
        + (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
        (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) +
        (0.0000291583 * ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
        (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
        (0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
        (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));

        return $index;
    }
}
