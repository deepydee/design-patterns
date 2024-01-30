<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation;

use Modules\HeadFirstPatterns\WeatherStation\Contracts\Observer;
use Modules\HeadFirstPatterns\WeatherStation\Contracts\Subject;

/**
 * @property-read float $temperature
 * @property-read float $humidity
 * @property-read float $pressure
 *
 * @method float getTemperature()
 * @method float getHumidity()
 * @method float getPressure()
 */
class WeatherData implements Subject
{
    private float $temperature = 0.0;

    private float $humidity = 0.0;

    private float $pressure = 0.0;

    public function __construct(private array $observers = [])
    {
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}
