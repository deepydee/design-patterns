<?php

namespace Modules\HeadFirstPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\HeadFirstPatterns\SimUDuck\FlyBehavior\FlyRocketPowered;
use Modules\HeadFirstPatterns\SimUDuck\MallardDuck;
use Modules\HeadFirstPatterns\SimUDuck\ModelDuck;
use Modules\HeadFirstPatterns\WeatherStation\Observers\CurrentConditionsDisplay;
use Modules\HeadFirstPatterns\WeatherStation\Observers\ForecastDisplay;
use Modules\HeadFirstPatterns\WeatherStation\Observers\HeatIndexDisplay;
use Modules\HeadFirstPatterns\WeatherStation\Observers\StatisticsDisplay;
use Modules\HeadFirstPatterns\WeatherStation\WeatherData;

class HeadFirstController extends Controller
{
    public function simUDuck(MallardDuck $mallardDuck, ModelDuck $modelDuck): void
    {
        $mallardDuck->display();
        $mallardDuck->performFly();
        $mallardDuck->performQuack();

        echo '<br>';

        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        $modelDuck->performFly();
        $modelDuck->performQuack();
    }

    public function weatherStation(WeatherData $weatherData): void
    {
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        echo '<br>';
        $weatherData->setMeasurements(82, 70, 29.2);
        echo '<br>';
        $weatherData->setMeasurements(78, 90, 29.2);
        echo '<br>';
    }
}
