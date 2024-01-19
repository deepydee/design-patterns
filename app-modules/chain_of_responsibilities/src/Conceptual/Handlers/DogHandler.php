<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\Conceptual\Handlers;

/**
 * Все Конкретные Обработчики либо обрабатывают запрос, либо передают его
 * следующему обработчику в цепочке.
 */
class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'MeatBall') {
            return "Dog: I'll eat the ".$request.'.<br>';
        }

        return parent::handle($request);
    }
}
