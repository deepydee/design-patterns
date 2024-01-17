<?php

declare(strict_types=1);

namespace Modules\Observer\RealWorld;

/**
 * Этот Конкретный Компонент регистрирует все события, на которые он подписан.
 */
class Logger implements \SplObserver
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;

        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function update(\SplSubject $repository, string $event = null, $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "Logger: I've written '$event' entry to the log.\n";
    }
}
