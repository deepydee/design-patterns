<?php

declare(strict_types=1);

namespace Modules\Facade\ReallWorld;

/**
 * Подсистема API YouTube.
 */
class YouTube
{
    public function __construct(private string $youtubeApiKey)
    {
    }

    public function fetchVideo(): string
    {
        return 'YouTube fetch video...<br>';
    }

    public function saveAs(string $path): void
    {
        // ...
    }

    // ...дополнительные методы и классы...
}
