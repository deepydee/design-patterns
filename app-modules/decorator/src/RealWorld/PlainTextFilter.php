<?php

declare(strict_types=1);

namespace Modules\Decorator\RealWorld;

/**
 * Этот Конкретный Декоратор удаляет все теги HTML из данного текста.
 */
final class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        return strip_tags($text);
    }
}
