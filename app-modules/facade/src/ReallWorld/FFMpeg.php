<?php

declare(strict_types=1);

namespace Modules\Facade\ReallWorld;

/**
 * Подсистема FFmpeg (сложная библиотека работы с видео/аудио).
 */
class FFMpeg
{
    public static function create(): self
    {
        return new self();
    }

    public function open(string $video): void
    {
        // ...
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
