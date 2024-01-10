<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\Twig;

use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;

/**
 * Этот Конкретный Продукт предоставляет шаблоны заголовков страниц Twig.
 */
final class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return '<h1>{{ title }}</h1>';
    }
}
