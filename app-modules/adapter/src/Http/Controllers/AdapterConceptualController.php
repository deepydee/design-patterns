<?php

declare(strict_types=1);

namespace Modules\Adapter\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Adapter\Conceptual\Adaptee;
use Modules\Adapter\Conceptual\Adapter;
use Modules\Adapter\Conceptual\Target;

/**
 * Паттерн Адаптер
 *
 * Назначение: Позволяет объектам с несовместимыми интерфейсами работать вместе.
 */
class AdapterConceptualController extends Controller
{
    public function __invoke()
    {
        echo 'Client: I can work just fine with the Target objects:<br>';
        $target = new Target();
        $this->clientCode($target);
        echo '<br>';
        echo '<br>';

        $adaptee = new Adaptee();
        echo "Client: The Adaptee class has a weird interface. See, I don't understand it:<br>";
        echo 'Adaptee: '.$adaptee->specificRequest();
        echo '<br>';
        echo '<br>';

        echo 'Client: But I can work with it via the Adapter:<br>';
        $adapter = new Adapter($adaptee);
        $this->clientCode($adapter);
    }

    /**
     * Клиентский код поддерживает все классы, использующие целевой интерфейс.
     */
    private function clientCode(Target $target)
    {
        echo $target->request();
    }
}
