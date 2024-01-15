<?php

declare(strict_types=1);

namespace Modules\Command\Conceptual\Commands;

use Modules\Command\Conceptual\Contracts\Command;

/**
 * Некоторые команды способны выполнять простые операции самостоятельно.
 */
class SimpleCommand implements Command
{
    public function __construct(private string $payload)
    {
    }

    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")<br>";
    }
}
