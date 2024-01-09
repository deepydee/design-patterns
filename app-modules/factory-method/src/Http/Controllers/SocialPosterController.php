<?php

namespace Modules\FactoryMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FactoryMethod\RealWorld\Posters\FacebookPoster;
use Modules\FactoryMethod\RealWorld\Posters\LinkedInPoster;
use Modules\FactoryMethod\RealWorld\SocialNetworkPoster;

/**
 * Паттерн Фабричный Метод
 *
 * Назначение: Определяет общий интерфейс для создания объектов в суперклассе,
 * позволяя подклассам изменять тип создаваемых объектов.
 *
 * Пример: В этом примере паттерн Фабричный Метод предоставляет интерфейс для
 * создания коннекторов к социальным сетям, которые могут быть использованы для
 * входа в сеть, создания сообщений и, возможно, выполнения других действий, – и
 * всё это без привязки клиентского кода к определённым классам конкретной
 * социальной сети.
 */

class SocialPosterController extends Controller
{
    /**
     * На этапе инициализации приложение может выбрать, с какой социальной сетью оно
     * хочет работать, создать объект соответствующего подкласса и передать его
     * клиентскому коду.
     */
    public function index(): void
    {
        echo "Testing ConcreteCreator1:<br>";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "<br><br>";

        echo "Testing ConcreteCreator2:<br>";
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));
    }

    /**
     * Клиентский код может работать с любым подклассом SocialNetworkPoster, так как
     * он не зависит от конкретных классов.
     */
    private function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }
}
