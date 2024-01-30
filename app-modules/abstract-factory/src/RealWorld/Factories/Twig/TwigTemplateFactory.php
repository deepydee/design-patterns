<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\Twig;

use Modules\AbstractFactory\RealWorld\Contracts\PageTemplate;
use Modules\AbstractFactory\RealWorld\Contracts\TemplateFactory;
use Modules\AbstractFactory\RealWorld\Contracts\TemplateRenderer;
use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;

final class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
