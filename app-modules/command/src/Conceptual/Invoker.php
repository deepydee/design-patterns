<?php

declare(strict_types=1);

namespace Modules\Command\Conceptual;

use Modules\Command\Conceptual\Contracts\Command;

/**
 * Отправитель связан с одной или несколькими командами. Он отправляет запрос
 * команде.
 */
class Invoker
{
    private Command $onStart;
    private Command $onFinish;

    /**
     * Инициализация команд.
     */
    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    /**
     * Отправитель не зависит от классов конкретных команд и получателей.
     * Отправитель передаёт запрос получателю косвенно, выполняя команду.
     */
    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?<br>";
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...<br>";

        echo "Invoker: Does anybody want something done after I finish?<br>";
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}
