<?php

namespace Modules\FactoryMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FactoryMethod\Conceptual\ConcreteCreator1;
use Modules\FactoryMethod\Conceptual\ConcreteCreator2;
use Modules\FactoryMethod\Conceptual\Creator;

/**
 * Паттерн Фабричный Метод
 *
 * Назначение: Определяет общий интерфейс для создания объектов в суперклассе,
 * позволяя подклассам изменять тип создаваемых объектов.
 */
class FactoryConceptualController extends Controller
{
    /**
     * Приложение выбирает тип создателя в зависимости от конфигурации или среды.
     */
    public function index(): void
    {
        echo "App: Launched with the ConcreteCreator1.\n";
        $this->clientCode(new ConcreteCreator1());
        echo "\n\n";

        echo "App: Launched with the ConcreteCreator2.\n";
        $this->clientCode(new ConcreteCreator2());
    }

    /**
     * Клиентский код работает с экземпляром конкретного создателя, хотя и через его
     * базовый интерфейс. Пока клиент продолжает работать с создателем через базовый
     * интерфейс, вы можете передать ему любой подкласс создателя.
     */
    private function clientCode(Creator $creator): void
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            .$creator->someOperation();
        // ...
    }
}
