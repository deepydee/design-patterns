<?php

declare(strict_types=1);

namespace Modules\Facade\Conceptual;

use Modules\Facade\Conceptual\Subsystem1;
use Modules\Facade\Conceptual\Subsystem2;

/**
 * Класс Фасада предоставляет простой интерфейс для сложной логики одной или
 * нескольких подсистем. Фасад делегирует запросы клиентов соответствующим
 * объектам внутри подсистемы. Фасад также отвечает за управление их жизненным
 * циклом. Все это защищает клиента от нежелательной сложности подсистемы.
 */
class Facade
{
    protected ?Subsystem1 $subsystem1;

    protected ?Subsystem2 $subsystem2;

    /**
     * В зависимости от потребностей вашего приложения вы можете предоставить
     * Фасаду существующие объекты подсистемы или заставить Фасад создать их
     * самостоятельно.
     */
    public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    /**
     * Методы Фасада удобны для быстрого доступа к сложной функциональности
     * подсистем. Однако клиенты получают только часть возможностей подсистемы.
     */
    public function operation(): string
    {
        $result = 'Facade initializes subsystems:<br>';
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= 'Facade orders subsystems to perform the action:<br>';
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}
