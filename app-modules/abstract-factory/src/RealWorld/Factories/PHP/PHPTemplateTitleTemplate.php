<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\PHP;

use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;

/**
 * А этот Конкретный Продукт предоставляет шаблоны заголовков страниц
 * PHPTemplate.
 */
final class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return '<h1><?= $title; ?></h1>';
    }
}
