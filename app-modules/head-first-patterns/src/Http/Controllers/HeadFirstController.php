<?php

namespace Modules\HeadFirstPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\PizzaStore\ChicagoPizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\PizzaStore\NYPizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories\ChicagoStylePizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories\NYStylePizzaStore;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\PizzaStore;
use Modules\HeadFirstPatterns\Remote\Commands\CeilingFanHighCommand;
use Modules\HeadFirstPatterns\Remote\Commands\CeilingFanMediumCommand;
use Modules\HeadFirstPatterns\Remote\Commands\CeilingFanOffCommand;
use Modules\HeadFirstPatterns\Remote\Commands\GarageDoorDownCommand;
use Modules\HeadFirstPatterns\Remote\Commands\GarageDoorOpenCommand;
use Modules\HeadFirstPatterns\Remote\Commands\GarageDoorUpCommand;
use Modules\HeadFirstPatterns\Remote\Commands\LightOffCommand;
use Modules\HeadFirstPatterns\Remote\Commands\LightOnCommand;
use Modules\HeadFirstPatterns\Remote\Commands\StereoOffCommand;
use Modules\HeadFirstPatterns\Remote\Commands\StereoOnWithCDCommand;
use Modules\HeadFirstPatterns\Remote\ComplexRemoteControl;
use Modules\HeadFirstPatterns\Remote\Objects\CeilingFan;
use Modules\HeadFirstPatterns\Remote\Objects\GarageDoor;
use Modules\HeadFirstPatterns\Remote\Objects\Light;
use Modules\HeadFirstPatterns\Remote\Objects\Stereo;
use Modules\HeadFirstPatterns\Remote\SimpleRemoteControl;
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

    public function orderPizzaAbstractFactory(
        NYPizzaStore $nyPizzaStore,
        ChicagoPizzaStore $chicagoPizzaStore,
    ): void {
        $pizza = $nyPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::CHEESE);
        echo 'Ethan ordered a '.$pizza->getName().'<br>';
        echo '<br>';
        $pizza = $chicagoPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::CHEESE);
        echo 'Joel ordered a '.$pizza->getName().'<br>';
        echo '<br>';

        $pizza = $nyPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::CLAM);
        echo 'Ethan ordered a '.$pizza->getName().'<br>';
        echo '<br>';
        $pizza = $chicagoPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::CLAM);
        echo 'Joel ordered a '.$pizza->getName().'<br>';
        echo '<br>';

        $pizza = $nyPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::PEPPERONI);
        echo 'Ethan ordered a '.$pizza->getName().'<br>';
        echo '<br>';
        $pizza = $chicagoPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::PEPPERONI);
        echo 'Joel ordered a '.$pizza->getName().'<br>';
        echo '<br>';

        $pizza = $nyPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::VEGGIE);
        echo 'Ethan ordered a '.$pizza->getName().'<br>';
        echo '<br>';
        $pizza = $chicagoPizzaStore->orderPizza(\Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType::VEGGIE);
        echo 'Joel ordered a '.$pizza->getName().'<br>';
        echo '<br>';
    }

    public function SimpleRemoteControl(SimpleRemoteControl $remote): void
    {
        $light = new Light('Living Room');
        $garageDoor = new GarageDoor('Garage');

        $lightOn = new LightOnCommand($light);
        $garageOpen = new GarageDoorOpenCommand($garageDoor);

        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();

        $remote->setCommand($garageOpen);
        $remote->buttonWasPressed();
    }

    public function ComplexRemoteControl(ComplexRemoteControl $remote): void
    {
        $livingRoomLight = new Light('Living Room');
        $kitchenRoomLight = new Light('Kitchen');

        $ceilingFan = new CeilingFan('Living Room');

        $garageDoor = new GarageDoor('Garage');

        $stereo = new Stereo('Living Room');

        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $kitchenLightOn = new LightOnCommand($kitchenRoomLight);
        $kitchenLightOff = new LightOffCommand($kitchenRoomLight);

        $ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
        $ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $garageDoorUp = new GarageDoorUpCommand($garageDoor);
        $garageDoorDown = new GarageDoorDownCommand($garageDoor);

        $stereoOnWithCD = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        $remote->setCommand(slot: 0, onCommand: $livingRoomLightOn, offCommand: $livingRoomLightOff);
        $remote->setCommand(slot: 1, onCommand: $kitchenLightOn, offCommand: $kitchenLightOff);

        $remote->setCommand(slot: 2, onCommand: $ceilingFanHigh, offCommand: $ceilingFanOff);
        $remote->setCommand(slot: 3, onCommand: $ceilingFanMedium, offCommand: $ceilingFanOff);

        $remote->setCommand(slot: 4, onCommand: $stereoOnWithCD, offCommand: $stereoOff);
        $remote->setCommand(slot: 5, onCommand: $garageDoorUp, offCommand: $garageDoorDown);

        echo $remote;

        echo '<br>';
        echo '<br>';

        $remote->onButtonWasPressed(slot: 0);
        $remote->offButtonWasPressed(slot: 0);
        $remote->undoButtonWasPressed();

        $remote->onButtonWasPressed(slot: 1);
        $remote->offButtonWasPressed(slot: 1);

        $remote->onButtonWasPressed(slot: 2);
        $remote->offButtonWasPressed(slot: 2);
        $remote->undoButtonWasPressed();

        $remote->onButtonWasPressed(slot: 3);
        $remote->undoButtonWasPressed();

        $remote->onButtonWasPressed(slot: 4);
        $remote->offButtonWasPressed(slot: 4);

        $remote->onButtonWasPressed(slot: 5);
        $remote->offButtonWasPressed(slot: 5);
        $remote->undoButtonWasPressed();
    }

    public function ComplexRemoteControlLambdaas(ComplexRemoteControl $remote): void
    {
        $livingRoomLight = new Light('Living Room');

        $remote->setCommand(
            slot: 0,
            onCommand: fn () => $livingRoomLight->on(),
            offCommand: fn () => $livingRoomLight->off(),
        );

        $kitchenRoomLight = new Light('Kitchen');

        $remote->setCommand(
            slot: 1,
            onCommand: fn () => $kitchenRoomLight->on(),
            offCommand: fn () => $kitchenRoomLight->off(),
        );

        $ceilingFan = new CeilingFan('Living Room');

        $remote->setCommand(
            slot: 2,
            onCommand: fn () => $ceilingFan->high(),
            offCommand: fn () => $ceilingFan->off(),
        );

        $garageDoor = new GarageDoor('Garage');

        $remote->setCommand(
            slot: 3,
            onCommand: fn () => $garageDoor->up(),
            offCommand: fn () => $garageDoor->down(),
        );

        $stereo = new Stereo('Living Room');

        $remote->setCommand(
            slot: 4,
            onCommand: function () use ($stereo) {
                $stereo->on();
                $stereo->setCD();
                $stereo->setVolume(volume: 11);
            },
            offCommand: fn () => $stereo->off(),
        );

        $remote->onButtonWasPressed(slot: 0);
        $remote->offButtonWasPressed(slot: 0);

        $remote->onButtonWasPressed(slot: 1);
        $remote->offButtonWasPressed(slot: 1);

        $remote->onButtonWasPressed(slot: 2);
        $remote->offButtonWasPressed(slot: 2);

        $remote->onButtonWasPressed(slot: 3);
        $remote->offButtonWasPressed(slot: 3);

        $remote->onButtonWasPressed(slot: 4);
        $remote->offButtonWasPressed(slot: 4);
        $remote->undoButtonWasPressed();
    }
}
