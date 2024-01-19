<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\Conceptual\Handlers;

/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Nut') {
            return "Squirrel: I'll eat the ".$request.'.<br>';
        }

        return parent::handle($request);
    }
}
