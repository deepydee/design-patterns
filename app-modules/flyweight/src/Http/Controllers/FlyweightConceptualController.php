<?php

namespace Modules\Flyweight\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Flyweight\Conceptual\FlyweightFactory;

/**
 * Паттерн Легковес
 *
 * Назначение: Позволяет вместить бóльшее количество объектов в отведённую
 * оперативную память. Легковес экономит память, разделяя общее состояние
 * объектов между собой, вместо хранения одинаковых данных в каждом объекте.
 */
class FlyweightConceptualController extends Controller
{
    public function __invoke()
    {
        /**
         * Клиентский код обычно создает кучу предварительно заполненных легковесов на
         * этапе инициализации приложения.
         */
        $factory = new FlyweightFactory([
            ['Chevrolet', 'Camaro2018', 'pink'],
            ['Mercedes Benz', 'C300', 'black'],
            ['Mercedes Benz', 'C500', 'red'],
            ['BMW', 'M5', 'red'],
            ['BMW', 'X6', 'white'],
            // ...
        ]);

        $factory->listFlyweights();

        // ...

        $this->addCarToPoliceDatabase($factory,
            'CL234IR',
            'James Doe',
            'BMW',
            'M5',
            'red',
        );

        $this->addCarToPoliceDatabase($factory,
            'CL234IR',
            'James Doe',
            'BMW',
            'X1',
            'red',
        );

        $factory->listFlyweights();
    }

    private function addCarToPoliceDatabase(
        FlyweightFactory $ff, $plates, $owner,
        $brand, $model, $color
    ) {
        echo "<br>Client: Adding a car to database.<br>";
        $flyweight = $ff->getFlyweight([$brand, $model, $color]);

        // Клиентский код либо сохраняет, либо вычисляет внешнее состояние и
        // передает его методам легковеса.
        $flyweight->operation([$plates, $owner]);
    }
}
