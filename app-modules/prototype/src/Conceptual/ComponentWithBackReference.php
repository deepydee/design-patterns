<?php

declare(strict_types=1);

namespace Modules\Prototype\Conceptual;

class ComponentWithBackReference
{
    public Prototype $prototype;

    /**
     * Обратите внимание, что конструктор не будет выполнен во время
     * клонирования. Если у вас сложная логика внутри конструктора, вам может
     * потребоваться выполнить ее также и в методе clone.
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}
