<?php

declare(strict_types=1);

namespace Modules\Command\Conceptual;

/**
 * Классы Получателей содержат некую важную бизнес-логику. Они умеют выполнять
 * все виды операций, связанных с выполнением запроса. Фактически, любой класс
 * может выступать Получателем.
 */
class Receiver
{
    public function doSomething(string $a): void
    {
        echo 'Receiver: Working on ('.$a.'.)<br>';
    }

    public function doSomethingElse(string $b): void
    {
        echo 'Receiver: Also working on ('.$b.'.)<br>';
    }
}
