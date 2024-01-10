<?php

declare(strict_types=1);

namespace Modules\Decorator\RealWorld;

use Modules\Decorator\RealWorld\Contracts\InputFormat;

/**
 * Конкретный Компонент является основным элементом декорирования. Он содержит
 * исходный текст как есть, без какой-либо фильтрации или форматирования.
 */
class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
