<?php

declare(strict_types=1);

namespace Modules\Mediator\RealWorld;

use Modules\Mediator\RealWorld\Contracts\Observer;

/**
 * Этот Конкретный Компонент регистрирует все события, на которые он подписан.
 */
class Logger implements Observer
{
    public function __construct(private string $filename)
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function update(string $event, object $emitter, $data = null)
    {
        $entry = date('Y-m-d H:i:s').": '$event' with data '".json_encode($data)."'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "Logger: I've written '$event' entry to the log.<br>";
    }
}
