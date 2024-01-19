<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\Conceptual\Handlers;

/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Banana') {
            return "Monkey: I'll eat the ".$request.'.<br>';
        }

        return parent::handle($request);
    }
}
