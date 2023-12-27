<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\PHP;

use Modules\AbstractFactory\RealWorld\Contracts\PageTemplate;
use Modules\AbstractFactory\RealWorld\Contracts\TemplateFactory;
use Modules\AbstractFactory\RealWorld\Contracts\TemplateRenderer;
use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;
use Modules\AbstractFactory\RealWorld\Factories\PHP\PHPTemplatePageTemplate;
use Modules\AbstractFactory\RealWorld\Factories\PHP\PHPTemplateRenderer;
use Modules\AbstractFactory\RealWorld\Factories\PHP\PHPTemplateTitleTemplate;

/**
 * А эта Конкретная Фабрика создает шаблоны PHPTemplate.
 */
final class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
