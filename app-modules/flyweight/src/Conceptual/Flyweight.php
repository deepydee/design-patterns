<?php

declare(strict_types=1);

namespace Modules\Flyweight\Conceptual;

/**
 * Легковес хранит общую часть состояния (также называемую внутренним
 * состоянием), которая принадлежит нескольким реальным бизнес-объектам.
 * Легковес принимает оставшуюся часть состояния (внешнее состояние, уникальное
 * для каждого объекта)  через его параметры метода.
 */
class Flyweight
{
    public function __construct(private array $sharedState)
    {
    }

    public function operation(array $uniqueState): void
    {
        $s = json_encode($this->sharedState);
        $u = json_encode($uniqueState);

        echo "Flyweight: Displaying shared ($s) and unique ($u) state.<br>";
    }
}
