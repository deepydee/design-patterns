<?php

declare(strict_types=1);

namespace Modules\Command\Conceptual\Commands;

use Modules\Command\Conceptual\Contracts\Command;
use Modules\Command\Conceptual\Receiver;

/**
 * Но есть и команды, которые делегируют более сложные операции другим объектам,
 * называемым «получателями».
 */
class ComplexCommand implements Command
{
    /**
     * Сложные команды могут принимать один или несколько объектов-получателей
     * вместе с любыми данными о контексте через конструктор.
     */
    public function __construct(
        private Receiver $receiver,
        private string $a, // Данные о контексте, необходимые для запуска методов получателя.
        private string $b,
    ) {
    }

    /**
     * Команды могут делегировать выполнение любым методам получателя.
     */
    public function execute(): void
    {
        echo 'ComplexCommand: Complex stuff should be done by a receiver object.<br>';
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}
