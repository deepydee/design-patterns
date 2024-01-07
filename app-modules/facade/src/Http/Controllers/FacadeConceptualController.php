<?php

namespace Modules\Facade\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Facade\Conceptual\Facade;
use Modules\Facade\Conceptual\Subsystem1;
use Modules\Facade\Conceptual\Subsystem2;

/**
 * Паттерн Фасад
 *
 * Назначение: Предоставляет простой интерфейс к сложной системе классов,
 * библиотеке или фреймворку.
 */
class FacadeConceptualController extends Controller
{
    /**
     * В клиентском коде могут быть уже созданы некоторые объекты подсистемы. В этом
     * случае может оказаться целесообразным инициализировать Фасад с этими
     * объектами вместо того, чтобы позволить Фасаду создавать новые экземпляры.
     */
    public function __invoke(Subsystem1 $subsystem1, Subsystem2 $subsystem2)
    {
        $facade = new Facade($subsystem1, $subsystem2);
        $this->clientCode($facade);
    }

    /**
     * Клиентский код работает со сложными подсистемами через простой интерфейс,
     * предоставляемый Фасадом. Когда фасад управляет жизненным циклом подсистемы,
     * клиент может даже не знать о существовании подсистемы. Такой подход позволяет
     * держать сложность под контролем.
     */
    private function clientCode(Facade $facade)
    {
        // ...

        echo $facade->operation();

        // ...
    }
}
