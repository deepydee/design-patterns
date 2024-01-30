<?php

namespace Modules\HeadFirstPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories\ChicagoStylePizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories\NYStylePizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\PizzaStore;
use Modules\HeadFirstPatterns\SimUDuck\FlyBehavior\FlyRocketPowered;
use Modules\HeadFirstPatterns\SimUDuck\MallardDuck;
use Modules\HeadFirstPatterns\SimUDuck\ModelDuck;
use Modules\HeadFirstPatterns\Starbuzz\Beverages\DarkRoast;
use Modules\HeadFirstPatterns\Starbuzz\Beverages\Espresso;
use Modules\HeadFirstPatterns\Starbuzz\Beverages\HouseBlend;
use Modules\HeadFirstPatterns\Starbuzz\Condiments\Mocha;
use Modules\HeadFirstPatterns\Starbuzz\Condiments\Whip;
use Modules\HeadFirstPatterns\Starbuzz\Enums\Size;
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

    public function starBuzz(): void
    {
        $beverage = new Espresso();
        echo $beverage->getDescription().' $'.$beverage->cost();

        $beverage2 = new DarkRoast();
        $beverage2->setSize(Size::TALL);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo '<br>'.$beverage2->getDescription().' $'.$beverage2->cost();

        $beverage3 = new HouseBlend();
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo '<br>'.$beverage3->getDescription().' $'.$beverage3->cost();
    }

    public function orderPizzaSimple(PizzaStore $pizzaStore): void
    {
        $pizzaStore->orderPizza(PizzaType::CHEESE);

        echo '<br>';

        $pizzaStore->orderPizza(PizzaType::CLAM);
    }

    public function orderPizzaFactoryMethod(
        NYStylePizzaStore $nyStylePizzaStore,
        ChicagoStylePizzaStore $chicagoStylePizzaStore,
    ) {
        $pizza = $nyStylePizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Enums\PizzaType::CHEESE);
        echo 'Ethan ordered a '.$pizza->getName().'<br>';

        $pizza = $chicagoStylePizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Enums\PizzaType::VEGGIE);
        echo 'Joel ordered a '.$pizza->getName().'<br>';
    }

    public function orderPizzaAbstractFactory(): void
    {
        // code...
    }
}
