<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\Twig;

use Modules\AbstractFactory\RealWorld\BasePageTemplate;

/**
 * Вариант шаблонов страниц Twig.
 */
final class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}
