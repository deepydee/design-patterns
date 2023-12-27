<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Contracts;

use Modules\AbstractFactory\RealWorld\Contracts\PageTemplate;
use Modules\AbstractFactory\RealWorld\Contracts\TemplateRenderer;
use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;

/**
 * Интерфейс Абстрактной фабрики объявляет создающие методы для каждого
 * определённого типа продукта.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
